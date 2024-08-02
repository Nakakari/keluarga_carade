<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBpjs extends Model
{
    use HasFactory;
    protected $table = 'jenis_bpjs';
    protected $guarded = ['id'];
}
