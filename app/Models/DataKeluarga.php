<?php

namespace App\Models;

use App\Models\Settings\wilayah\Provinsi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataKeluarga extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_users',
        'nomor_kk',
        'wilayah_kerja_puskesmas',
        'provinsi',
        'kabkot',
        'kecamatan',
        'kelurahan',
        'rw',
        'rt',
        'lat',
        'long',
    ];

    public function data_anggota_keluarga()
    {
        return $this->belongsTo(DataAnggotaKeluarga::class, 'nomor_kk', 'nomor_kk');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
