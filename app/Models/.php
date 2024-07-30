<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataAnggotaKeluarga extends Model
{
    use HasFactory, softDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_users',
        'nomor_kk',
        'provinsi',
        'kabkot',
        'kecamatan',
        'kelurahan',
        'rw',
        'rt',
        'lat',
        'long',
    ];

    public function data_keluarga()
    {
        return $this->hasOne(DataKeluarga::class, 'id', 'id_keluarga');
    }

    public function answer()
    {
        return $this->hasOne(Answer::class, 'id_anggota_keluarga', 'id');
    }
}
