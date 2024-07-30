<?php

namespace App\Models\Settings\wilayah;

use App\Helpers\Datatables\DatatableHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahan';
    protected $fillable = [
        'id', 'nama_kelurahan', 'kec_id', 'created_by', 'updated_by'
    ];


    public function getLastKode($kecamatan_id)
    {
        $kodeKec = $kecamatan_id;
        $getKab = Kecamatan::where('kab_id', $kodeKec)->latest('id')->first();
        $jkodeKec = strlen($kodeKec);
        $arrkode = str_split($getKab['id'], $jkodeKec);
        $lastkode = end($arrkode) + 1;
        $lastkode2 = $kodeKec . $lastkode;
        return $lastkode2;
    }

    public function getKelurahan($res)
    {
        $data = Kelurahan::where('id', $res)->first();
        return $data != null ? $data->nama_kelurahan : '';
    }
}
