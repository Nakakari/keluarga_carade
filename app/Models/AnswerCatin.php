<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerCatin extends Model
{
    use HasFactory;
    protected $table = 'answer_catin';
    protected $guarded = ['id'];
}
