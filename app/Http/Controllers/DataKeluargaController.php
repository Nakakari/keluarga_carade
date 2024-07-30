<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\DataKeluargaRequest;
use App\Models\DataAnggotaKeluarga;
use App\Models\Puskesmas;

class DataKeluargaController extends Controller
{

    public function index()
    {
        $title = "Data Keluarga";
        if (Auth::user()->roles === 'admin') {
            $data = DataKeluarga::all();
        } else {
            $data = DataKeluarga::where('id_users', Auth::user()->id)->get();
        }
        return view('pages.dashboard.keluarga.index', compact(['title', 'data']));
    }

    public function create()
    {
        $title = "Data Keluarga";
        $puskesmas = Puskesmas::all();
        return view('pages.dashboard.keluarga.create', compact(['title', 'puskesmas']));
    }

    public function store(Request $request)
    {
        $check = DataKeluarga::where('nomor_kk', $request->nomor_kk)->count();
        if ($check > 0) {
            $res = [
                'status' => 'error',
                'icon' => 'warning',
                'title' => 'Data Sudah Ada',
                'message' => 'Nomor KK sudah terdaftar',
            ];
            echo json_encode($res);
        } else {
            DB::transaction(function () use ($request) {
                Puskesmas::updateOrCreate(
                    ['nama' => $request->wilayah_kerja_puskesmas]
                );
                DataKeluarga::create([
                    'id_users' => Auth::user()->id,
                    'nomor_kk' => $request->nomor_kk,
                    'wilayah_kerja_puskesmas' => $request->wilayah_kerja_puskesmas,
                    'provinsi' => $request->provinsi,
                    'kabkot' => $request->kabkot,
                    'kecamatan' => $request->kecamatan,
                    'kelurahan' => $request->desa,
                    'rw' => $request->rw,
                    'rt' => $request->rt,
                    'lat' => $request->lat,
                    'long' => $request->long,
                ]);
            });
            $res = [
                'status' => 'success',
                'icon' => 'success',
                'title' => 'Berhasil',
                'message' => 'Data Keluarga berhasil ditambahkan',
                'nomor_kk' => $request->nomor_kk,
            ];
            echo json_encode($res);
        }
    }

    public function edit($id)
    {
        $title = "Data Keluarga";
        $keluarga = DataKeluarga::find($id);
        $puskesmas = Puskesmas::all();
        return view('pages.dashboard.keluarga.edit', compact(['title', 'keluarga', 'puskesmas']));
    }


    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($id, $request) {
            $keluarga = DataKeluarga::find($id);
            $keluarga->update($request->all());
            Puskesmas::updateOrCreate(
                ['nama' => $request->wilayah_kerja_puskesmas]
            );
        });
        $res = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data Keluarga berhasil diupdate',
            'nomor_kk' => $request->nomor_kk,
        ];
        echo json_encode($res);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataKeluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DataKeluarga::where('id', $id)->delete();
        $keluarga = DataKeluarga::find($id);
        $anggota = DataKeluarga::whereIn('nomor_kk', explode(",", $keluarga->nomor_kk))->delete();
        DataAnggotaKeluarga::whereIn('nomor_kk', explode(",", $keluarga->nomor_kk))->delete();
        if ($anggota) {
            $kuesioner = DB::table('answers')->whereIn('nomor_kk', explode(",", $keluarga->nomor_kk))->delete();
            if ($kuesioner) {
                $keluarga->delete();
                $res = [
                    'status' => 'success',
                    'icon' => 'success',
                    'title' => 'Berhasil',
                    'message' => 'Data Keluarga berhasil dihapus',
                ];
            } else {
                $res = [
                    'status' => 'error',
                    'icon' => 'warning',
                    'title' => 'Gagal',
                    'message' => 'Data Keluarga gagal dihapus',
                ];
            }
        } else {
            $res = [
                'status' => 'error',
                'icon' => 'warning',
                'title' => 'Gagal',
                'message' => 'Data Keluarga gagal dihapus',
            ];
        }
        echo json_encode($res);
    }
}
