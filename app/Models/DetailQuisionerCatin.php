<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailQuisionerCatin extends Model
{
    use HasFactory;
    protected $table = 'detail_quisioner_catin';
    protected $fillable = [
        'id_quisioner_catin', 'nama', 'point',
    ];
}
