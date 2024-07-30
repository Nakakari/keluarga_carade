<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataAnggotaKeluarga;
use App\Helpers\ResponseFormatter;
use Illuminate\Http\Request;

class APIDataAnggotaKeluargaController extends Controller
{
    public function all(Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $id_keluarga = $request->input('id_keluarga');
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $status_pernikahan = $request->input('status_pernikahan');
        $tanggal_kelahiran = $request->input('tanggal_kelahiran');
        $umur = $request->input('umur');
        $status = $request->input('status');
        $status_pendidikan = $request->input('status_pendidikan');
        $pekerjaan = $request->input('pekerjaan');

        if($id) {
            $data_anggota_keluarga = DataAnggotaKeluarga::with(['data_keluarga'])->find($id);

            if($data_anggota_keluarga) {
                return ResponseFormatter::success(
                    $data_anggota_keluarga,
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

        $data_anggota_keluarga = DataAnggotaKeluarga::query();

        if($id_keluarga) {
            $data_anggota_keluarga->with(['data_keluarga'])->find($id_keluarga);
        }

        if($nama) {
            $data_anggota_keluarga->where('nama', 'like', '%' . $nama . '%');
        }

        if($jenis_kelamin) {
            $data_anggota_keluarga->where('jenis_kelamin', 'like', '%' . $jenis_kelamin . '%');
        }

        if($status_pernikahan) {
            $data_anggota_keluarga->where('status_pernikahan', 'like', '%' . $status_pernikahan . '%');
        }

        if($tanggal_kelahiran) {
            $data_anggota_keluarga->where('tanggal_kelahiran', 'like', '%' . $tanggal_kelahiran . '%');
        }

        if($umur) {
            $data_anggota_keluarga->where('umur', 'like', '%' . $umur . '%');
        }

        if($status) {
            $data_anggota_keluarga->where('status', 'like', '%' . $status . '%');
        }

        if($status_pendidikan) {
            $data_anggota_keluarga->where('status_pendidikan', 'like', '%' . $status_pendidikan . '%');
        }

        if($pekerjaan) {
            $data_anggota_keluarga->where('pekerjaan', 'like', '%' . $pekerjaan . '%');
        }

        return ResponseFormatter::success(
            $data_anggota_keluarga->paginate($limit),
            'Data berhasil diambil'
        );
    }
}
