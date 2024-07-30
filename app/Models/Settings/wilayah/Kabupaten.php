<?php

namespace App\Models\Settings\wilayah;

use App\Helpers\Datatables\DatatableHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    protected $table = 'kabupaten';
    protected $fillable = [
        'id', 'nama_kabupaten', 'prov_id', 'created_by', 'updated_by'
    ];

    public function getLastKode($provinsi_id)
    {
        $kodeProv = $provinsi_id;
        $getKab = Kabupaten::where('prov_id', $kodeProv)->latest('id')->first();
        $jkodeProv = strlen($kodeProv);
        $arrkode = str_split($getKab['id'], $jkodeProv);
        $lastkode = end($arrkode) + 1;
        $lastkode2 = $kodeProv . $lastkode;
        return $lastkode2;
    }

    public function getKabupaten($res)
    {
        $data = Kabupaten::where('id', $res)->first();
        return $data != null ? $data->nama_kabupaten : '';
    }
}
