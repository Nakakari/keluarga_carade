<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Answers extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'question_item_id',
        'answer',
        'nomor_kk',
        'id_anggota_keluarga',
        'answer_point',
        'user_id'
    ];

    public function question()
    {
        return $this->belongsTo(Questionnaires::class, 'question_id', 'id');
    }

    public function question_item()
    {
        return $this->belongsTo(QuestionnaireItems::class, 'question_item_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function jumlahSurvei()
    {
        $get_survei = Answers::query()->select('id_anggota_keluarga');
        if (Auth::user()->roles == 'surveyor') {
            $get_survei = $get_survei->where('user_id', '=', Auth::user()->id);
        }
        $get_survei = $get_survei->get();
        $uniques = array();
        foreach ($get_survei as $c) {
            $uniques[$c->id_anggota_keluarga] = $c; // Get unique country by code.
        }
        $j_survei = count($uniques);
        return $j_survei;
    }
}
