<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\DataAnggotaKeluarga;
use App\Models\DataKeluarga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataAnggotaKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nomor_kk)
    {
        $getKK = DataKeluarga::where('nomor_kk', $nomor_kk)->first();
        if (isset($getKK)) {
            $title = "Data Anggota Keluarga";
            $data = DataAnggotaKeluarga::where('nomor_kk', $nomor_kk)->get();
            $status = (new DataAnggotaKeluarga())->statusStunting($data);
            return view('pages.dashboard.anggota.index', compact(['title', 'data', 'nomor_kk', 'status']));
        } else {
            return redirect()->route('data.keluarga.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nomor_kk)
    {
        $nomor_kk = $nomor_kk;
        $title = "Data Anggota Keluarga";
        return view('pages.dashboard.anggota.create', compact(['title', 'nomor_kk']));
    }

    public function lanjut_store(Request $request)
    {
        $datetime = DateTime::createFromFormat("Y-m-d", $request->tanggal_kelahiran);
        $date = $datetime->format('Y');
        $umur = date('Y') - $date;

        DataAnggotaKeluarga::create([
            'nomor_kk' => $request->nomor_kk,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_pernikahan' => $request->status_pernikahan,
            'tanggal_kelahiran' => $request->tanggal_kelahiran,
            'umur' => $umur,
            'status' => $request->status,
            'status_pendidikan' => $request->status_pendidikan,
            'pekerjaan' => $request->pekerjaan,
        ]);
        return redirect("/kuesioner/lanjut/$request->nomor_kk");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $umur = [];
        $data = [];
        foreach ($request->nomor_kk as $key => $val) {
            $datetime = DateTime::createFromFormat("Y-m-d", $request->tanggal_kelahiran[$key]);
            $date = $datetime->format('Y');
            $umur[$key] = date('Y') - $date;
            $data[$key] = [
                'nomor_kk' => $val,
                'nik' =>  $request->nik[$key],
                'nama' => $request->nama[$key],
                'jenis_kelamin' => $request->jenis_kelamin[$key],
                'status_pernikahan' => $request->status_pernikahan[$key],
                'tanggal_kelahiran' => $request->tanggal_kelahiran[$key],
                'umur' => $umur[$key],
                'status' => $request->status[$key],
                'status_pendidikan' => $request->status_pendidikan[$key],
                'pekerjaan' => $request->pekerjaan[$key],
            ];
            DataAnggotaKeluarga::insert($data[$key]);
        }
        $res = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data Anggota Keluarga berhasil ditambahkan',
            'nomor_kk' => $request->nomor_kk[0],
        ];
        echo json_encode($res);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataAnggotaKeluarga  $dataAnggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(DataAnggotaKeluarga $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataAnggotaKeluarga  $dataAnggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Data Anggota Keluarga";
        $anggota = DataAnggotaKeluarga::find($id);
        return view('pages.dashboard.anggota.edit', compact(['title', 'anggota']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataAnggotaKeluarga  $dataAnggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datetime = DateTime::createFromFormat("Y-m-d", $request->tanggal_kelahiran);
        $date = $datetime->format('Y');
        $umur = date('Y') - $date;

        $anggota = DataAnggotaKeluarga::find($id);
        $data = ([
            'nomor_kk' => $request->nomor_kk,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_pernikahan' => $request->status_pernikahan,
            'tanggal_kelahiran' => $request->tanggal_kelahiran,
            'umur' => $umur,
            'status' => $request->status,
            'status_pendidikan' => $request->status_pendidikan,
            'pekerjaan' => $request->pekerjaan,
        ]);
        $anggota->update($data);
        $res = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data Anggota Keluarga berhasil diupdate',
            'nomor_kk' => $request->nomor_kk,
        ];
        echo json_encode($res);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataAnggotaKeluarga  $dataAnggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = DataAnggotaKeluarga::find($id);
        $anggota->delete();
        $res = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data Keluarga berhasil dihapus',
        ];
        echo json_encode($res);
    }
}
