<?php

namespace App\Models;

use App\Helpers\DivisonKuisionerHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class DataAnggotaKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_kk',
        'nik',
        'nama',
        'jenis_kelamin',
        'status_pernikahan',
        'tanggal_kelahiran',
        'umur',
        'status',
        'status_pendidikan',
        'pekerjaan',
    ];

    public function data_keluarga()
    {
        return $this->hasOne(DataKeluarga::class, 'nomor_kk', 'nomor_kk');
    }

    public function answers()
    {
        return $this->hasMany(Answers::class, 'nomor_kk', 'nomor_kk');
    }

    public function statusStunting($data)
    {
        $status = [];
        $pembagi = [
            'Baduta' => DivisonKuisionerHelper::Baduta,
            'Anak SD' => DivisonKuisionerHelper::AnakSD,
            'Remaja Putri' => DivisonKuisionerHelper::RemajaPutri,
            'pengetahuan_remaja' => DivisonKuisionerHelper::PengetahuanRemajaPutri,
            'Ibu atau Ibu Hamil' => DivisonKuisionerHelper::Ibu,
            'pengetahuan_ibu' => DivisonKuisionerHelper::PengetahuanIbu,
            'Lingkungan' => DivisonKuisionerHelper::Lingkungan,
        ];
        foreach ($data as $key => $value) {
            $answer = Answers::where('id_anggota_keluarga', $value->id);
            if ($answer->exists()) {
                if ($value->status == 'Remaja Putri') {
                    $getNilai = count(DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Remaja Putri' AND questionnaires.question_subcategory = 'kuesioner' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $value->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $value->id . "' GROUP BY answers.question_id"));
                    $persen = $getNilai / $pembagi['Remaja Putri'] * 100;
                    $getNilaiPeng = count(DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Remaja Putri' AND questionnaires.question_subcategory = 'pengetahuan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $value->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $value->id . "' GROUP BY answers.question_id"));
                    $persenPeng = $getNilaiPeng / $pembagi['pengetahuan_remaja'] * 100;
                    $status[$value->id] = ($persen == 100 && $persenPeng > 50) ? 'Tidak Berisiko Stunting' : 'Berisiko Stunting';
                } elseif ($value->status == 'Ibu atau Ibu Hamil') {
                    $getNilai = count(DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'kuesioner' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $value->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $value->id . "' GROUP BY answers.question_id"));
                    $persen = $getNilai / $pembagi['Ibu atau Ibu Hamil'] * 100;
                    $getNilaiPeng = count(DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'pengetahuan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $value->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $value->id . "' GROUP BY answers.question_id"));
                    $persenPeng = $getNilaiPeng / $pembagi['pengetahuan_ibu'] * 100;
                    $status[$value->id] = ($persen == 100 && $persenPeng > 50) ? 'Tidak Berisiko Stunting' : 'Berisiko Stunting';
                } elseif ($value->status == 'Lainnya') {
                    $getNilai = count(DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Lingkungan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $value->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $value->id . "' GROUP BY answers.question_id"));
                    $persen = $getNilai / $pembagi['Lingkungan'] * 100;
                    $status[$value->id] = $persen == 100 ? 'Tidak Berisiko Stunting' : 'Berisiko Stunting';
                } else {
                    $getNilai = count(DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = '" . $value->status . "' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $value->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $value->id . "' GROUP BY answers.question_id"));
                    $persen = $getNilai / $pembagi[$value->status] * 100;
                    $status[$value->id] = $persen == 100 ? 'Tidak Berisiko Stunting' : 'Berisiko Stunting';
                }
            } else {
                $answerKuisioner = Answers::where('nomor_kk', $value->nomor_kk)->whereNull('id_anggota_keluarga');
                $status[$value->id] = 'Quiz Belum Diisi';
                if ($answerKuisioner->exists()) {
                    if ($value->status == 'Lainnya') {
                        $getNilai = count(DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Lingkungan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $value->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $value->id . "' GROUP BY answers.question_id"));
                        $status[$value->id] = 'Telah Mengisi Kuisioner';
                    }
                }
            }
        }

        return $status;
    }

    public function getHasilIndividu($id)
    {
        $answer = Answers::where('id_anggota_keluarga', $id);
        $persen_kuesioner = 0;
        if ($answer->exists()) {
            $results = Answers::select(
                DB::raw("(SUM(CASE WHEN data_anggota_keluargas.`status`='Baduta' THEN answer_point ELSE 0 END))/'" . DivisonKuisionerHelper::Baduta . "'  AS sum_baduta"),
                DB::raw("(SUM(CASE WHEN data_anggota_keluargas.`status`='Anak SD' THEN answer_point ELSE 0 END)/'" . DivisonKuisionerHelper::AnakSD . "') AS sum_anak_sd"),
                DB::raw("(SUM(CASE WHEN questionnaires.question_category = 'Remaja Putri' AND questionnaires.question_subcategory = 'kuesioner' THEN answer_point ELSE 0 END)/'" . DivisonKuisionerHelper::RemajaPutri . "') AS sum_remaja_putri"),
                DB::raw("(SUM(CASE WHEN questionnaires.question_category = 'Remaja Putri' AND questionnaires.question_subcategory = 'pengetahuan' THEN answer_point ELSE 0 END)/'" . DivisonKuisionerHelper::RemajaPutri . "') AS sum_pengetahuan_remaja"),
                DB::raw("(SUM(CASE WHEN  questionnaires.question_category = 'Lingkungan' AND questionnaires.question_subcategory = 'kuesioner' THEN answer_point ELSE 0 END)/'" . DivisonKuisionerHelper::Lingkungan . "') AS sum_lingkungan"),
                DB::raw("(SUM(CASE WHEN questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'kuesioner' THEN answer_point ELSE 0 END)/'" . DivisonKuisionerHelper::Ibu . "') AS sum_ibu"),
                DB::raw("(SUM(CASE WHEN questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'pemeriksaan' THEN answer_point ELSE 0 END)/'" . DivisonKuisionerHelper::PemeriksaanIbu . "') AS sum_pemeriksaan_ibu"),
                DB::raw("(SUM(CASE WHEN  questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'pengetahuan' THEN answer_point ELSE 0 END)/'" . DivisonKuisionerHelper::PengetahuanIbu . "') AS sum_pengetahuan_ibu"),
                DB::raw("(SUM(CASE WHEN questionnaires.question_subcategory = 'kuesioner' THEN answer_point ELSE 0 END)/'" . DivisonKuisionerHelper::TotalKuisioner . "') AS sum_kuisioner"),
                DB::raw("(SUM(CASE WHEN questionnaires.question_subcategory = 'pengetahuan' THEN answer_point ELSE 0 END)/'" . DivisonKuisionerHelper::TotalPengetahuan . "') AS sum_pengetahuan"),
            )->leftJoin('data_anggota_keluargas', 'data_anggota_keluargas.id', '=', 'answers.id_anggota_keluarga')
                ->leftJoin('questionnaires', 'answers.question_id', '=', 'questionnaires.id')
                ->where('data_anggota_keluargas.id', $id)
                ->groupBy('id_anggota_keluarga')
                ->first();
            $persen_kuesioner = ($results->sum_baduta + $results->sum_anak_sd + $results->sum_remaja_putri + $results->sum_ibu + $results->sum_lingkungan) * 100;
        }
        return round($persen_kuesioner, 1);
    }
}
