<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QusionerCatin extends Model
{
    use HasFactory;
    protected $table = 'quisioner_catin';
    protected $fillable = [
        'nama',
        'type',
        'kategori',
        'sub_kategori',
    ];

    public function detailKuis()
    {
        return $this->hasMany(DetailQuisionerCatin::class, 'id_quisioner_catin', 'id');
    }
}
