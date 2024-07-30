<?php

use App\Models\Answers;
use App\Models\Questionnaires;

function getQuestionPerCategory($category)
{
    return Questionnaires::where('question_category', $category)->get();
}

function getAnswer($questionId, $id_anggota_keluarga)
{
    return Answers::where('question_id', $questionId)->where('id_anggota_keluarga', $id_anggota_keluarga)->first();
}
