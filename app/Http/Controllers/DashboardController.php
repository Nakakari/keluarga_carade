<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataKeluarga;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        // dd($pie);

        $j_keluarga = DataKeluarga::all()->count();
        $j_admin = count(User::where('roles', 'admin')->get());
        $j_surveyor = count(User::where('roles', 'surveyor')->get());
        $j_survei = (new Answers)->jumlahSurvei();

        $data = [
            'title' => 'Dashboard',
            'j_keluarga' => $j_keluarga,
            'j_survei' => $j_survei,
            'j_admin' => $j_admin,
            'j_surveyor' => $j_surveyor,

        ];

        return view('dashboard', $data);
    }

    public function graph(Request $request)
    {
        $query = "SELECT * FROM answers
        LEFT JOIN questionnaire_items ON answers.question_item_id = questionnaire_items.id
        LEFT JOIN questionnaires ON answers.question_id = questionnaires.id
        LEFT JOIN data_keluargas ON answers.nomor_kk = data_keluargas.nomor_kk";

        if ($request->kelurahan) {
            $query .= " WHERE data_keluargas.kelurahan = '" . $request->kelurahan . "'";
        }
        if ($request->kecamatan) {
            $query .= " WHERE data_keluargas.kecamatan = '" . $request->kecamatan . "'";
        }
        if ($request->kabkot) {
            $query .= " WHERE data_keluargas.kabkot = '" . $request->kabkot . "'";
        }
        $query .= " GROUP BY answers.nomor_kk";

        $results = DB::select($query);

        // dd($results);
        $baduta = [];
        $anak = [];
        $remaja = [];
        $ibu = [];
        $pengetahuan_remaja = [];
        $pemeriksaan_ibu = [];
        $pengetahuan_ibu = [];
        $lingkungan = [];
        $questionCategory = [];
        $rawData = [];
        $res = [];
        $carade = 0;
        $menuju = 0;

        foreach ($results as $key => $d) {
            $baduta[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Baduta' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY answers.question_id");
            $anak[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Anak SD' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY answers.question_id");
            $remaja[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Remaja Putri' AND questionnaires.question_subcategory = 'kuesioner' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY answers.question_id");
            $lingkungan[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Lingkungan' AND questionnaires.question_subcategory = 'kuesioner' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY answers.question_id");
            $pengetahuan_remaja[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Remaja Putri' AND questionnaires.question_subcategory = 'pengetahuan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY answers.question_id");
            $ibu[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'kuesioner' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY answers.question_id");
            $pemeriksaan_ibu[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'pemeriksaan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY answers.question_id");
            $pengetahuan_ibu[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'pengetahuan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY answers.question_id");
            $totalKuesioner[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_subcategory = 'kuesioner' AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY questionnaires.question_category");
            $totalPengetahuan[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_subcategory = 'pengetahuan' AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY questionnaires.question_category");
            // dd(count($baduta[$key]));
            $rawData[$key] = [
                'nomor_kk' => $d->nomor_kk,
                'baduta' => !empty($baduta[$key]) ? (count($baduta[$key]) / 6) : 0,
                'anak' => !empty($anak[$key]) ? (count($anak[$key]) / 2) : 0,
                'remaja' => !empty($remaja[$key]) ? (count($remaja[$key]) / 3) : 0,
                'lingkungan' => !empty($lingkungan[$key]) ? (count($lingkungan[$key]) / 5) : 0,
                'pengetahuan_remaja' => !empty($pengetahuan_remaja[$key]) ? (count($pengetahuan_remaja[$key]) / 10) : 0,
                'ibu' => !empty($ibu[$key]) ? (count($ibu[$key]) / 2) : 0,
                'pemeriksaan_ibu' => !empty($pemeriksaan_ibu[$key]) ? count($pemeriksaan_ibu[$key]) : 0,
                'pengetahuan_ibu' => !empty($pengetahuan_ibu[$key]) ? (count($pengetahuan_ibu[$key]) / 15) : 0,
                'total_kuesioner' => !empty($totalKuesioner[$key]) ? count($totalKuesioner[$key]) : 0,
                'total_pengetahuan' => !empty($totalPengetahuan[$key]) ? count($totalPengetahuan[$key]) : 0,
            ];
        }
        for ($i = 0; $i < count($rawData); $i++) {
            $getlonglang = DataKeluarga::where('nomor_kk', $rawData[$i]['nomor_kk'])->first();
            $res[$i] = [
                'nomor_kk' => $rawData[$i]['nomor_kk'],
                'persen_kuesioner' => !empty($rawData[$i]['total_kuesioner']) ? (($rawData[$i]['baduta'] + $rawData[$i]['anak'] + $rawData[$i]['remaja'] + $rawData[$i]['ibu'] + $rawData[$i]['lingkungan'])  / $rawData[$i]['total_kuesioner']) * 100 : 0,
                'persen_pengetahuan' => !empty($rawData[$i]['total_pengetahuan']) ? (($rawData[$i]['pengetahuan_remaja'] + $rawData[$i]['pengetahuan_ibu']) / $rawData[$i]['total_pengetahuan']) * 100 : 100,
                'long' => $getlonglang->long,
                'lat' => $getlonglang->lat,
            ];
            if ($res[$i]['persen_kuesioner'] == 100 && $res[$i]['persen_pengetahuan'] > 50) {
                $res[$i]['keluarga'] = "Keluarga Carade'";
                $carade++;
            } else {
                $res[$i]['keluarga'] = "Menuju Keluarga Carade'";
                $menuju++;
            }
        }
        // dd($res);
        $total =  $carade + $menuju;

        $pie = [
            'ket' => ["Keluarga Carade'", "Menuju Keluarga Carade'"],
            'graph' => [($total > 0 ? ceil(($carade / $total) * 100) : 0), ceil(($menuju / 100) * 100)]
        ];

        return [
            'koordinate' => $res,
            'pie' => $pie,
        ];
    }
}
