<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catin extends Model
{
    use HasFactory;
    protected $table = "calon_pengantin";
    protected $guarded = ['id'];

    public function kuisCatin()
    {
        return $this->hasMany(AnswerCatin::class, 'id_calon_pengantin', 'id');
    }
}
