<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Settings\wilayah\Kabupaten;
use App\Models\Settings\wilayah\Kecamatan;
use App\Models\Settings\wilayah\Kelurahan;
use App\Models\Settings\wilayah\Provinsi;
use Illuminate\Http\Request;

class BaseWilayahController extends Controller
{
    public function listProvinsi()
    {
        $data = Provinsi::all();
        return response()->json(
            $data,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function listKabupaten()
    {
        $data = Kabupaten::where('prov_id', request()->get('provinsi_id'))->get();
        return response()->json(
            $data,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function listKecamatan()
    {
        $data = Kecamatan::where('kab_id', request()->get('kabupaten_id'))->get();
        return response()->json(
            $data,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function listKelurahan()
    {
        $data = Kelurahan::where('kec_id', request()->get('kecamatan_id'))->get();
        return response()->json(
            $data,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }
}
