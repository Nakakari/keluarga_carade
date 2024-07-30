<?php

namespace App\Models\Settings\wilayah;

use App\Helpers\Datatables\DatatableHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';
    protected $fillable = [
        'id', 'nama_provinsi', 'created_by', 'updated_by'
    ];


    public function getLastKode()
    {
        $getProv = Provinsi::latest('id')->first();
        $lastKode = $getProv->id + 1;
        return $lastKode;
    }

    public function getProvinsi($res)
    {
        $data = Provinsi::where('id', $res)->first();
        return $data != null ? $data->nama_provinsi : '';
    }
}
