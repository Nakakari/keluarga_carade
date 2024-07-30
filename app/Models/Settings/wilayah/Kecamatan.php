<?php

namespace App\Models\Settings\wilayah;

use App\Helpers\Datatables\DatatableHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $fillable = [
        'id', 'nama_kecamatan', 'kab_id', 'created_by', 'updated_by'
    ];

    public function getLastKode($kabupaten_id)
    {
        $kodeKab = $kabupaten_id;
        $getKab = Kecamatan::where('kab_id', $kodeKab)->latest('id')->first();
        $jkodeKab = strlen($kodeKab);
        $arrkode = str_split($getKab['id'], $jkodeKab);
        $lastkode = end($arrkode) + 1;
        $lastkode2 = $kodeKab . $lastkode;
        return $lastkode2;
    }

    public function getKecamatan($res)
    {
        $data = Kecamatan::where('id', $res)->first();
        return $data != null ? $data->nama_kecamatan : '';
    }
}
