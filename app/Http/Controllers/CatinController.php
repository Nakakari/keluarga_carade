<?php

namespace App\Http\Controllers;

use App\Exports\CatinExport;
use App\Models\AnswerCatin;
use App\Models\Answers;
use App\Models\Catin;
use App\Models\DetailQuisionerCatin;
use App\Models\QusionerCatin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf;


class CatinController extends Controller
{
    public function index()
    {
        $catins = Catin::all();
        $title = "Calon Pengantin Perempuan";

        return view('catin.index', compact('catins', 'title'));
    }

    public function create()
    {
        $title = "Calon Pengantin Perempuan";

        return view('catin.create', compact('title'));
    }

    public function store(Request $request)
    {
        $check = Catin::where('nik', $request->nik)->count();
        if ($check > 0) {
            $res = [
                'status' => 'error',
                'icon' => 'warning',
                'title' => 'Data Sudah Ada',
                'message' => 'NIK sudah terdaftar',
            ];
            echo json_encode($res);
        } else {
            DB::transaction(function () use ($request) {
                Catin::create($request->all());
            });
            $res = [
                'status' => 'success',
                'icon' => 'success',
                'title' => 'Berhasil',
                'message' => 'Data Keluarga berhasil ditambahkan',
            ];
            echo json_encode($res);
        }
    }

    public function edit($id)
    {
        $title = "Calon Pengantin";
        $catin = Catin::find($id);
        return view('catin.edit', compact(['title', 'catin']));
    }

    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($id, $request) {
            $catin = Catin::find($id);
            $catin->update($request->all());
        });
        $res = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data Calon Pengantin berhasil diupdate'
        ];
        echo json_encode($res);
    }

    public function destroy($id)
    {
        $anggota = Catin::find($id);
        $anggota->delete();
        $res = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data Calon Pengantin berhasil dihapus',
        ];
        echo json_encode($res);
    }

    // QUIZ
    public function quiz($id)
    {
        $kuis = QusionerCatin::all();
        $title = 'Kuis Catin';
        $catin = Catin::where('id', $id)->first();
        return view('catin.kuis.create', compact('kuis', 'title', 'catin'));
    }

    public function quizStore(Request $request)
    {
        $answered = AnswerCatin::where('id_calon_pengantin', $request->id_calon_pengantin)->first();
        if (!empty($answered)) {
            return redirect()->route('catin.index')->with('error', 'Data pengantin sudah terdata.');
        }
        $answers = $request->id_quisioner_catin;
        foreach ($answers as $key => $answer) {
            $answerArray = is_array($answer) ? $answer : [$answer];
            foreach ($answerArray as $data) {
                $data = str_ireplace('.', '', $data);
                $detailKuisCatin = DetailQuisionerCatin::find($data);
                AnswerCatin::create([
                    'id_calon_pengantin' => $request->id_calon_pengantin,
                    'id_quisioner_catin' => $key,
                    'id_detail_quisioner_catin' => $detailKuisCatin ? $data : null,
                    'detail' => $detailKuisCatin->nama ?? $data,
                    'point' => $detailKuisCatin->point ?? 0,
                    'id_user' => Auth::user()->id,
                ]);
            }
        }
        return redirect()->route('catin.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function quizEdit($id)
    {
        $kuis = QusionerCatin::all();
        $title = 'Kuis Catin';
        $catin = Catin::where('id', $id)->first();
        $answers = AnswerCatin::where('id_calon_pengantin', $catin->id)->get();

        return view('catin.kuis.edit', compact('kuis', 'title', 'catin', 'answers'));
    }

    public function quizUpdate(Request $request)
    {
        DB::transaction(function () use ($request): void {
            AnswerCatin::where('id_calon_pengantin', $request->id_calon_pengantin)->delete();
            $answers = $request->id_quisioner_catin;
            foreach ($answers as $key => $answer) {
                $answerArray = is_array($answer) ? $answer : [$answer];
                foreach ($answerArray as $data) {
                    $data = str_ireplace('.', '', $data);
                    $detailKuisCatin = DetailQuisionerCatin::find($data);
                    AnswerCatin::create([
                        'id_calon_pengantin' => $request->id_calon_pengantin,
                        'id_quisioner_catin' => $key,
                        'id_detail_quisioner_catin' => $detailKuisCatin ? $data : null,
                        'detail' => $detailKuisCatin->nama ?? $data,
                        'point' => $detailKuisCatin->point ?? 0,
                        'id_user' => Auth::user()->id,
                    ]);
                }
            }
        });

        return redirect()->route('catin.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function quizDestroy($id)
    {
        $anggota = AnswerCatin::where('id_calon_pengantin', $id);
        $anggota->delete();
        $res = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data Calon Pengantin berhasil dihapus',
        ];
        echo json_encode($res);
    }

    public function export(Request $request)
    {
        $namaFile = 'Calon Pengantin Perempuan';
        if ($request->query('btnType') == 'btnExcel') {
            $name = $namaFile . '.xlsx';
            $type = \Maatwebsite\Excel\Excel::XLSX;
            return Excel::download(
                new CatinExport(),
                $name,
                $type
            );
        } else {
            $name = $namaFile . '.pdf';
            $type = \Maatwebsite\Excel\Excel::MPDF;
            $catins = Catin::get();
            $pertanyaans = QusionerCatin::all();
            $data = [
                'headPertanyaan' => $pertanyaans,
                'catins' => $catins,
            ];

            $pdf = LaravelMpdf::loadView('catin.export.catin-quiz-pdf', $data, [
                'title' => $namaFile,
                'orientation' => 'L',
                'format' => 'A3'
            ]);

            return $pdf->stream($name);
        }
    }
}
