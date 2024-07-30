<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'question_item',
        'question_item_point',
    ];

    protected $table ='questionnaire_items';
}
