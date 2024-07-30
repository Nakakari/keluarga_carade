<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questionnaires extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'question',
        'question_type',
        'question_category',
        'question_subcategory',
    ];

    public function answer()
    {
        return $this->belongsTo(Answers::class, 'nomor_kk', 'nomor_kk');
    }
}
