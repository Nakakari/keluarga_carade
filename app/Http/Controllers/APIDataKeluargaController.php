<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataKeluarga;
use App\Helpers\ResponseFormatter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class APIDataKeluargaController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $id_users = $request->input('id_users');
        $nomor_kk = $request->input('nomor_kk');
        $wilayah_kerja_puskesmas = $request->input('wilayah_kerja_puskesmas');
        $provinsi = $request->input('provinsi');
        $kabkot = $request->input('kabkot');
        $kecamatan = $request->input('kecamatan');
        $kelurahan = $request->input('kelurahan');
        $rw = $request->input('rw');
        $rt = $request->input('rt');
        $lat = $request->input('lat');
        $long = $request->input('long');

        if ($id) {
            $data_keluarga = DataKeluarga::with(['user', 'data_anggota_keluarga'])->find($id);

            if ($data_keluarga) {
                return ResponseFormatter::success(
                    $data_keluarga,
                    'Data berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data gagal diambil',
                    404
                );
            }
        }

        $data_keluarga = DataKeluarga::with(['user', 'data_anggota_keluarga']);

        if ($id_users) {
            $data_keluarga->where('id_users', 'like', '%' . $id_users . '%');
        }

        if ($nomor_kk) {
            $data_keluarga->where('nomor_kk', 'like', '%' . $nomor_kk . '%');
        }

        if ($wilayah_kerja_puskesmas) {
            $data_keluarga->where('wilayah_kerja_puskesmas', 'like', '%' . $wilayah_kerja_puskesmas . '%');
        }

        if ($provinsi) {
            $data_keluarga->where('provinsi', 'like', '%' . $provinsi . '%');
        }

        if ($kabkot) {
            $data_keluarga->where('kabkot', 'like', '%' . $kabkot . '%');
        }

        if ($kecamatan) {
            $data_keluarga->where('kecamatan', 'like', '%' . $kecamatan . '%');
        }

        if ($kelurahan) {
            $data_keluarga->where('kelurahan', 'like', '%' . $kelurahan . '%');
        }

        if ($rw) {
            $data_keluarga->where('rw', 'like', '%' . $rw . '%');
        }

        if ($rt) {
            $data_keluarga->where('rt', 'like', '%' . $rt . '%');
        }

        if ($lat) {
            $data_keluarga->where('lat', 'like', '%' . $lat . '%');
        }

        if ($long) {
            $data_keluarga->where('long', 'like', '%' . $long . '%');
        }

        return ResponseFormatter::success(
            $data_keluarga->paginate($limit),
            'Data berhasil diambil'
        );
    }

    public function show($id)
    {
        $data_keluarga = DataKeluarga::find($id);
        return ResponseFormatter::success($data_keluarga, 'Data berhasil diambil');
    }

    public function createKeluarga(Request $request)
    {
        $data = $request->validate([
            'nomor_kk' => ['required', 'string'],
            'wilayah_kerja_puskesmas' => ['required', 'string', 'max:255'],
            'provinsi' => ['required', 'string', 'max:255'],
            'kabkot' => ['required', 'string', 'max:255'],
            'kecamatan' => ['required', 'string', 'max:255'],
            'kelurahan' => ['required', 'string', 'max:255'],
            'rw' => ['required', 'string', 'max:255'],
            'rt' => ['required', 'string', 'max:255'],
            'lat' => ['required', 'string', 'max:255'],
            'long' => ['required', 'string', 'max:255'],
        ]);

        $data_keluarga = DataKeluarga::create([
            'id_users' => Auth::user()->id,
            'nomor_kk' => $request->nomor_kk,
            'wilayah_kerja_puskesmas' => $request->wilayah_kerja_puskesmas,
            'provinsi' => $request->provinsi,
            'kabkot' => $request->kabkot,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rw' => $request->rw,
            'rt' => $request->rt,
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return ResponseFormatter::success($data_keluarga, 'Berhasil membuat data');
    }

    public function update(Request $request, $id)
    {
        $data_keluarga = DataKeluarga::find($id);
        $data_keluarga->update($request->all());

        return ResponseFormatter::success($data_keluarga, 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $data_keluarga = DataKeluarga::find($id);
        $data_keluarga->delete();

        return ResponseFormatter::success(null, 'Data berhasil diupdate');
    }
}
