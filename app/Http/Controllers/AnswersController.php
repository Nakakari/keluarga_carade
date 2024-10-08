<?php

namespace App\Http\Controllers;

use App\Exports\AnswersExport;
use App\Models\Answers;
use App\Models\DataAnggotaKeluarga;
use App\Models\DataKeluarga;
use PDF;
use Illuminate\Http\Request;
use App\Models\Questionnaires;
use App\Models\QuestionnaireItems;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class AnswersController extends Controller
{
    public function index()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        // dd($page);
        $title = 'Hasil Kuesioner';
        $query = "SELECT * FROM answers
            LEFT JOIN questionnaire_items ON answers.question_item_id = questionnaire_items.id
            LEFT JOIN questionnaires ON answers.question_id = questionnaires.id
            GROUP BY answers.nomor_kk";

        $perPage = 10; // Change 10 to the desired number of items per page
        $page = $page;

        $results = DB::select($query);

        $total = count($results);
        $paginator = new LengthAwarePaginator(
            array_slice($results, ($page - 1) * $perPage, $perPage),
            $total,
            $perPage,
            $page
        );
        $paginator->setPath('/kuesioner'); // Set the path to "/kuisioner"

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
        $total_kuesioner = [];
        $total_kuesioner_lingkungan = [];
        $total_pengetahuan = [];
        $res = [];

        foreach ($paginator as $key => $d) {
            $baduta[$key] = ['poin' => 0];
            $anak[$key] = ['poin' => 0];
            $remaja[$key] = ['poin' => 0];
            $ibu[$key] = ['poin' => 0];
            $pengetahuan_remaja[$key] = ['poin' => 0];
            $pemeriksaan_ibu[$key] = ['poin' => 0];
            $pengetahuan_ibu[$key] = ['poin' => 0];
            $lingkungan[$key] = ['poin' => 0];
            $total_kuesioner[$key] = ['poin' => 0];
            $total_kuesioner_lingkungan[$key] = ['poin' => 0];
            $total_pengetahuan[$key] = ['poin' => 0];

            $getAnggota = DataAnggotaKeluarga::query()->where('nomor_kk', $d->nomor_kk)->get();
            foreach ($getAnggota as $ak) {
                $baduta[$key][$ak->id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Baduta' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $ak->id . "' GROUP BY answers.question_id");
                $anak[$key][$ak->id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Anak SD' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $ak->id . "' GROUP BY answers.question_id");
                $remaja[$key][$ak->id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Remaja Putri' AND questionnaires.question_subcategory = 'kuesioner' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $ak->id . "' GROUP BY answers.question_id");
                $lingkungan[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Lingkungan' AND questionnaires.question_subcategory = 'kuesioner' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY answers.question_id");
                $pengetahuan_remaja[$key][$ak->id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Remaja Putri' AND questionnaires.question_subcategory = 'pengetahuan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $ak->id . "' GROUP BY answers.question_id");
                $ibu[$key][$ak->id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'kuesioner' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $ak->id . "' GROUP BY answers.question_id");
                $pemeriksaan_ibu[$key][$ak->id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'pemeriksaan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $ak->id . "' GROUP BY answers.question_id");
                $pengetahuan_ibu[$key][$ak->id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Ibu atau Ibu Hamil' AND questionnaires.question_subcategory = 'pengetahuan' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $ak->id . "' GROUP BY answers.question_id");
                $total_kuesioner[$key][$ak->id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_subcategory = 'kuesioner' AND answers.nomor_kk = '" . $d->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $ak->id . "' GROUP BY questionnaires.question_category");
                $total_kuesioner_lingkungan[$key] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_category = 'Lingkungan' AND questionnaires.question_subcategory = 'kuesioner' AND answers.answer_point = 1 AND answers.nomor_kk = '" . $d->nomor_kk . "' GROUP BY questionnaires.question_category");
                $total_pengetahuan[$key][$ak->id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE questionnaires.question_subcategory = 'pengetahuan' AND answers.nomor_kk = '" . $d->nomor_kk . "' AND answers.id_anggota_keluarga = '" . $ak->id . "' GROUP BY questionnaires.question_category");

                $baduta[$key]['poin'] = (array_key_exists('poin', $baduta[$key]) ? $baduta[$key]['poin'] : 0) + (array_key_exists($ak->id, $baduta[$key]) && !empty($baduta[$key][$ak->id]) ? count($baduta[$key][$ak->id]) / 6 : 0);
                $anak[$key]['poin'] = (array_key_exists('poin', $anak[$key]) ? $anak[$key]['poin'] : 0) + (array_key_exists($ak->id, $anak[$key]) && !empty($anak[$key][$ak->id]) ? count($anak[$key][$ak->id]) / 2 : 0);
                $remaja[$key]['poin'] = (array_key_exists('poin', $remaja[$key]) ? $remaja[$key]['poin'] : 0) + (array_key_exists($ak->id, $remaja[$key]) && !empty($remaja[$key][$ak->id]) ? count($remaja[$key][$ak->id]) / 3 : 0);
                $lingkungan[$key]['poin'] = count($lingkungan[$key]) / 5 ?? 0;
                $pengetahuan_remaja[$key]['poin'] = (array_key_exists('poin', $pengetahuan_remaja[$key]) ? $pengetahuan_remaja[$key]['poin'] : 0) + (array_key_exists($ak->id, $pengetahuan_remaja[$key]) && !empty($pengetahuan_remaja[$key][$ak->id]) ? count($pengetahuan_remaja[$key][$ak->id]) / 10 : 0);
                $ibu[$key]['poin'] = (array_key_exists('poin', $ibu[$key]) ? $ibu[$key]['poin'] : 0) + (array_key_exists($ak->id, $ibu[$key]) && !empty($ibu[$key][$ak->id]) ? count($ibu[$key][$ak->id]) / 2 : 0);
                $pemeriksaan_ibu[$key]['poin'] = (array_key_exists('poin', $pemeriksaan_ibu[$key]) ? $pemeriksaan_ibu[$key]['poin'] : 0) + (array_key_exists($ak->id, $pemeriksaan_ibu[$key]) && !empty($pemeriksaan_ibu[$key][$ak->id]) ? count($pemeriksaan_ibu[$key][$ak->id]) : 0);
                $pengetahuan_ibu[$key]['poin'] = (array_key_exists('poin', $pengetahuan_ibu[$key]) ? $pengetahuan_ibu[$key]['poin'] : 0) + (array_key_exists($ak->id, $pengetahuan_ibu[$key]) && !empty($pengetahuan_ibu[$key][$ak->id]) ? count($pengetahuan_ibu[$key][$ak->id]) / 15 : 0);
                $total_kuesioner[$key]['poin'] = (array_key_exists('poin', $total_kuesioner[$key]) ? $total_kuesioner[$key]['poin'] : 0) + (array_key_exists($ak->id, $total_kuesioner[$key]) && !empty($total_kuesioner[$key][$ak->id]) ? count($total_kuesioner[$key][$ak->id]) : 0);
                $total_kuesioner_lingkungan[$key]['poin'] = count($total_kuesioner_lingkungan[$key]) ?? 0;
                $total_pengetahuan[$key]['poin'] = (array_key_exists('poin', $total_pengetahuan[$key]) ? $total_pengetahuan[$key]['poin'] : 0) + (array_key_exists($ak->id, $total_pengetahuan[$key]) && !empty($total_pengetahuan[$key][$ak->id]) ? count($total_pengetahuan[$key][$ak->id]) : 0);
            }
            $rawData[$key] = [
                'nomor_kk' => $d->nomor_kk,
                'baduta' => $baduta[$key]['poin'],
                'anak' => $anak[$key]['poin'],
                'remaja' => $remaja[$key]['poin'],
                'lingkungan' => $lingkungan[$key]['poin'],
                'pengetahuan_remaja' => $pengetahuan_remaja[$key]['poin'],
                'ibu' => $ibu[$key]['poin'],
                'pemeriksaan_ibu' => $pemeriksaan_ibu[$key]['poin'],
                'pengetahuan_ibu' => $pengetahuan_ibu[$key]['poin'],
                'total_kuesioner' => $total_kuesioner[$key]['poin'] + $total_kuesioner_lingkungan[$key]['poin'],
                'total_pengetahuan' => $total_pengetahuan[$key]['poin'],
                'anggota_keluarga' => $getAnggota,
            ];
        }

        for ($i = 0; $i < count($rawData); $i++) {
            $res[$i] = [
                'nomor_kk' => $rawData[$i]['nomor_kk'],
                'anggota_keluarga' => $rawData[$i]['anggota_keluarga'],
                'persen_kuesioner' => !empty($rawData[$i]['total_kuesioner']) ? (($rawData[$i]['baduta'] + $rawData[$i]['anak'] + $rawData[$i]['remaja'] + $rawData[$i]['ibu'] + $rawData[$i]['lingkungan']) / $rawData[$i]['total_kuesioner']) * 100 : 0,
                'persen_pengetahuan' => !empty($rawData[$i]['total_pengetahuan']) ? (($rawData[$i]['pengetahuan_remaja'] + $rawData[$i]['pengetahuan_ibu']) / $rawData[$i]['total_pengetahuan']) * 100 : 0,
                'jumlah_pengetahuan' => $total_pengetahuan[$i]['poin'],
            ];
        }

        return view('pages.dashboard.kuesioner.index', compact(['title', 'res', 'paginator']));
    }

    public function check_status(Request $request)
    {
        $status = [];
        $nomor_kk = $request->nomor_kk;
        $check_status = DB::select("SELECT * FROM data_anggota_keluargas WHERE nomor_kk = " . $nomor_kk . "  GROUP BY status");
        foreach ($check_status as $check) {
            $status[] = $check->status;
        }
        // dd($check_status);
        return response()->json($status);
    }

    public function get_data($nomor_kk)
    {
        $data = Answers::where('nomor_kk', $nomor_kk)->get();
        return response()->json($data);
    }

    public function create($nomor_kk, $idAnggotaKeluarga)
    {
        $title = "Hasil Kuesioner";
        $nomor_kk = $nomor_kk;
        $check_status = DB::select("SELECT * FROM data_anggota_keluargas WHERE nomor_kk = '" . $nomor_kk . "' AND id = '" . $idAnggotaKeluarga . "'  GROUP BY status");
        $id_anggota_keluarga = $check_status[0]->id ?? NULL;
        $questionnaires = Questionnaires::all()->sortBy('id');
        $questionnaireItems = QuestionnaireItems::all()->sortBy('id');
        if (!$check_status) {
            $check_status = [(object) [
                'status' => 'Lainnya',
            ]];
        }
        $check_answer = DB::table('answers')
            ->where('id_anggota_keluarga', '=', $id_anggota_keluarga)
            ->where('nomor_kk', '=', $nomor_kk)
            ->get();
        // dd($check_status, $id_anggota_keluarga, $check_answer);
        if (count($check_answer) > 0) {
            if ($id_anggota_keluarga != null) {
                return redirect()->route('kuesioner.edit', [$nomor_kk, $id_anggota_keluarga]);
            } else {
                return redirect()->route('kuesioner.edit-keluarga', [$nomor_kk]);
            }
        } else {
            return view('pages.dashboard.kuesioner.create', compact(['title', 'nomor_kk', 'id_anggota_keluarga', 'check_status', 'questionnaires', 'questionnaireItems']));
        }
    }

    public function store(Request $request)
    {
        $questioner = QuestionnaireItems::where('question_item_point', 1);
        $countPengetahuan = [];
        // dd($request);
        try {
            DB::transaction(
                function () use ($request, $countPengetahuan, $questioner) {
                    if ($request->answer) {
                        foreach ($request->answer as $key => $answer) {

                            if (is_array($answer)) {
                                foreach ($answer as $key2 => $val) {
                                    $q = QuestionnaireItems::where('question_id', $key)->where('question_item', $val)->where('question_item_point', 1)->first();
                                    Answers::create([
                                        'user_id' => auth()->user()->id,
                                        'question_id' => $key,
                                        'question_item_id' => $key2,
                                        'answer' => $val,
                                        'nomor_kk' => $request->kk_number,
                                        'id_anggota_keluarga' => $request->id_anggota_keluarga ?? NULL,
                                        'answer_point' => isset($q['question_item_point']) ? $q['question_item_point'] : 0,
                                    ]);
                                }
                            } else {
                                $q = QuestionnaireItems::where('question_id', $key)->where('question_item', $answer)->where('question_item_point', 1)->first();
                                Answers::create([
                                    'user_id' => auth()->user()->id,

                                    'question_id' => $key,
                                    'question_item_id' => null,
                                    'answer' => $answer,
                                    'nomor_kk' => $request->kk_number,
                                    'id_anggota_keluarga' => $request->id_anggota_keluarga ?? NULL,
                                    'answer_point' => isset($q['question_item_point']) ? $q['question_item_point'] : 0,
                                ]);
                            }
                        }
                    }

                    if ($request->question_item_id) {
                        foreach ($request->question_item_id as $keys => $answer) {
                            // dump($answer);
                            if (is_array($answer)) {

                                $jawabanArr = [];
                                foreach ($answer as $jawaban) {
                                    $jawabanArr[] = explode(';', $jawaban)[0];
                                }
                                $answerStr = implode(';', $jawabanArr);


                                $answerId = $keys;
                                // $answerItemId = explode(',', $ckAnswer)[1];

                                echo 'answer id : ' . $answerId . '<br>';
                                // echo 'answer item id : ' . $answerItemId . '<br>';
                                echo 'answer : ' . $answerStr . '<br><br>';
                                $getSubcategory = Questionnaires::query()->where('id', $answerId)->first();
                                if ($getSubcategory->question_subcategory == 'pengetahuan') {
                                    $q = QuestionnaireItems::query()->where('question_id', $answerId)->where('question_item_point', 1)->count();
                                    $countPengetahuan[$answerId] = 0;
                                    foreach (explode(';', $answerStr) as $key => $value) {
                                        $getCountPeng = QuestionnaireItems::where('question_id', $answerId)->where('question_item', $value)->where('question_item_point', 1)->first();
                                        if (isset($getCountPeng)) {
                                            $countPengetahuan[$answerId] += 1;
                                        }
                                    }
                                    $answer_poin = $q == $countPengetahuan[$answerId] ? 1 : 0;
                                } else {
                                    $q = QuestionnaireItems::where('question_id', $answerId)->where('question_item', explode(';', $answerStr))->where('question_item_point', 1)->first();
                                    $answer_poin = isset($q['question_item_point']) ? $q['question_item_point'] : 0;
                                }
                                Answers::create([
                                    'question_id' => $answerId,
                                    'question_item_id' => null,
                                    'answer' => $answerStr,
                                    'nomor_kk' => $request->kk_number,
                                    'id_anggota_keluarga' => $request->id_anggota_keluarga ?? NULL,
                                    'answer_point' => $answer_poin,
                                    'user_id' => auth()->user()->id,

                                ]);
                            } else {
                                $answerId = $keys;
                                $answerItemId = explode(';', $answer)[1];
                                $answerStr = explode(';', $answer)[0];
                                echo 'answer id : ' . $answerId . '<br>';
                                echo 'answer item id : ' . $answerItemId . '<br>';
                                echo 'answer : ' . $answerStr . '<br><br>';
                                $q = QuestionnaireItems::where('question_id', $answerId)->where('question_item', $answerStr)->where('question_item_point', 1)->first();
                                Answers::create([
                                    'question_id' => $answerId,
                                    'question_item_id' => $answerItemId,
                                    'answer' => $answerStr,
                                    'nomor_kk' => $request->kk_number,
                                    'id_anggota_keluarga' => $request->id_anggota_keluarga ?? NULL,
                                    'answer_point' => isset($q['question_item_point']) ? $q['question_item_point'] : 0,
                                    'user_id' => auth()->user()->id,

                                ]);
                            }
                        }
                    }
                }
            );
            return redirect()->route('kuesioner.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Throwable $e) {
            return redirect()->route('kuesioner.index')->with('error', 'Data gagal disimpan.');
        }
        // die;
    }

    public function edit($nomor_kk, $idAnggotaKeluarga)
    {
        $title = "Hasil Kuesioner";
        $nomor_kk = $nomor_kk;
        $questionnaires = Questionnaires::all()->sortBy('id');
        $questionnaireItems = QuestionnaireItems::all()->sortBy('id');
        if ($idAnggotaKeluarga) {
            $check_status = DB::select("SELECT * FROM data_anggota_keluargas WHERE nomor_kk = '" . $nomor_kk . "' AND id = '" . $idAnggotaKeluarga . "'  GROUP BY status");
            $answers = DB::select("SELECT * FROM answers WHERE id_anggota_keluarga = '" . $idAnggotaKeluarga . "'");
            foreach ($questionnaires as $question) {
                $check[] = DB::select("SELECT * FROM answers WHERE id_anggota_keluarga = '" . $idAnggotaKeluarga . "' AND question_id = '" . $question->id . "'");
            }
        } else {
            $check_status = [(object) [
                'status' => 'Lainnya',
            ]];
            $answers = DB::select("SELECT * FROM answers WHERE nomor_kk = '" . $nomor_kk . "' AND ISNULL(id_anggota_keluarga)");
            foreach ($questionnaires as $question) {
                $check[] = DB::select("SELECT * FROM answers WHERE id_anggota_keluarga = '" . $idAnggotaKeluarga . "' AND question_id = '" . $question->id . "'");
            }
            $idAnggotaKeluarga = NULL;
        }

        // dd($answers);
        return view('pages.dashboard.kuesioner.edit', compact(['title', 'nomor_kk', 'idAnggotaKeluarga', 'check_status', 'questionnaires', 'questionnaireItems', 'answers']));
    }

    public function update(Request $request, $idAnggotaKeluarga)
    {
        // dd($request);
        $questioner = QuestionnaireItems::where('question_item_point', 1);
        $countPengetahuan = [];
        DB::transaction(
            function () use ($request, $questioner, $idAnggotaKeluarga, $countPengetahuan) {
                if ($request->answer) {
                    foreach ($request->answer as $key => $answer) {

                        if (is_array($answer)) {
                            foreach ($answer as $key2 => $val) {
                                $q = QuestionnaireItems::where('question_id', $key)->where('question_item', $val)->where('question_item_point', 1)->first();
                                $updateAnswer = Answers::where('id_anggota_keluarga', '=', $idAnggotaKeluarga)
                                    ->where('question_id', '=', $key)
                                    ->where('question_item_id', '=', $key2)
                                    ->first();
                                $item = [
                                    'user_id' => auth()->user()->id,
                                    'question_id' => $key,
                                    'question_item_id' => $key2,
                                    'answer' => $val,
                                    'nomor_kk' => $request->kk_number,
                                    'id_anggota_keluarga' => $request->id_anggota_keluarga ?? NULL,
                                    'answer_point' => isset($q['question_item_point']) ? $q['question_item_point'] : 0,
                                ];
                                if ($updateAnswer) {
                                    $updateAnswer->update($item);
                                } else {
                                    Answers::create($item);
                                }
                            }
                        } else {
                            $q = QuestionnaireItems::where('question_id', $key)->where('question_item', $answer)->where('question_item_point', 1)->first();
                            $updateAnswer = Answers::where('id_anggota_keluarga', '=', $idAnggotaKeluarga)
                                ->where('question_id', '=', $key)
                                ->first();
                            $item = [
                                'user_id' => auth()->user()->id,
                                'question_id' => $key,
                                'question_item_id' => null,
                                'answer' => $answer,
                                'nomor_kk' => $request->kk_number,
                                'id_anggota_keluarga' => $request->id_anggota_keluarga,
                                'answer_point' => isset($q['question_item_point']) ? $q['question_item_point'] : 0,
                            ];
                            if ($updateAnswer) {
                                $updateAnswer->update($item);
                            } else {
                                Answers::create($item);
                            }
                        }
                    }
                }

                if ($request->question_item_id) {
                    foreach ($request->question_item_id as $keys => $answer) {
                        // dump($answer);
                        if (is_array($answer)) {

                            $jawabanArr = [];
                            foreach ($answer as $jawaban) {
                                $jawabanArr[] = explode(';', $jawaban)[0];
                            }
                            $answerStr = implode(';', $jawabanArr);


                            $answerId = $keys;
                            // $answerItemId = explode(',', $ckAnswer)[1];

                            echo 'answer id : ' . $answerId . '<br>';
                            // echo 'answer item id : ' . $answerItemId . '<br>';
                            echo 'answer : ' . $answerStr . '<br><br>';
                            $getSubcategory = Questionnaires::query()->where('id', $answerId)->first();
                            if ($getSubcategory->question_subcategory == 'pengetahuan') {
                                $q = QuestionnaireItems::query()->where('question_id', $answerId)->where('question_item_point', 1)->count();
                                $countPengetahuan[$answerId] = 0;
                                foreach (explode(';', $answerStr) as $key => $value) {
                                    $getCountPeng = QuestionnaireItems::where('question_id', $answerId)->where('question_item', $value)->where('question_item_point', 1)->first();
                                    if (isset($getCountPeng)) {
                                        $countPengetahuan[$answerId] += 1;
                                    }
                                }
                                $answer_poin = $q == $countPengetahuan[$answerId] ? 1 : 0;
                            } else {
                                $q = QuestionnaireItems::where('question_id', $answerId)->where('question_item', explode(';', $answerStr))->where('question_item_point', 1)->first();
                                $answer_poin = isset($q['question_item_point']) ? $q['question_item_point'] : 0;
                            }
                            $updateAnswer = Answers::where('id_anggota_keluarga', '=', $idAnggotaKeluarga)
                                ->where('question_id', $answerId)
                                ->first();
                            $item = [
                                'question_id' => $answerId,
                                'question_item_id' => null,
                                'answer' => $answerStr,
                                'nomor_kk' => $request->kk_number,
                                'id_anggota_keluarga' => $request->id_anggota_keluarga,
                                'answer_point' => $answer_poin,
                                'user_id' => auth()->user()->id,

                            ];
                            if ($updateAnswer) {
                                $updateAnswer->update($item);
                            } else {
                                Answers::create($item);
                            }
                        } else {
                            $answerId = $keys;
                            $answerItemId = explode(';', $answer)[1];
                            $answerStr = explode(';', $answer)[0];
                            echo 'answer id : ' . $answerId . '<br>';
                            echo 'answer item id : ' . $answerItemId . '<br>';
                            echo 'answer : ' . $answerStr . '<br><br>';
                            $q = QuestionnaireItems::where('question_id', $answerId)->where('question_item', $answerStr)->where('question_item_point', 1)->first();
                            $updateAnswer = Answers::where('id_anggota_keluarga', '=', $idAnggotaKeluarga)
                                ->where('question_id', $answerId)
                                ->first();
                            $item = [
                                'question_id' => $answerId,
                                'question_item_id' => $answerItemId,
                                'answer' => $answerStr,
                                'nomor_kk' => $request->kk_number,
                                'id_anggota_keluarga' => $request->id_anggota_keluarga,
                                'answer_point' => isset($q['question_item_point']) ? $q['question_item_point'] : 0,
                                'user_id' => auth()->user()->id,
                            ];
                            if ($updateAnswer) {
                                $updateAnswer->update($item);
                            } else {
                                Answers::create($item);
                            }
                        }
                    }
                }
            }
        );
        // die;



        return redirect()->route('kuesioner.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function editKeluarga($nomor_kk)
    {
        $title = "Hasil Kuesioner";
        $nomor_kk = $nomor_kk;
        $questionnaires = Questionnaires::all()->sortBy('id');
        $questionnaireItems = QuestionnaireItems::all()->sortBy('id');

        $check_status = [(object) [
            'status' => 'Lainnya',
        ]];
        $answers = DB::select("SELECT * FROM answers WHERE nomor_kk = '" . $nomor_kk . "' AND ISNULL(id_anggota_keluarga)");
        foreach ($questionnaires as $question) {
            $check[] = DB::select("SELECT * FROM answers WHERE nomor_kk = '" . $nomor_kk . "' AND ISNULL(id_anggota_keluarga) AND question_id = '" . $question->id . "'");
        }
        $idAnggotaKeluarga = NULL;
        return view('pages.dashboard.kuesioner.edit-lainnya', compact(['title', 'nomor_kk', 'idAnggotaKeluarga', 'check_status', 'questionnaires', 'questionnaireItems', 'answers']));
    }

    public function destroy($nomor_kk)
    {
        DB::table('answers')->whereIn('nomor_kk', explode(",", $nomor_kk))->delete();
        $res = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data Keluarga berhasil dihapus',
        ];
        echo json_encode($res);
    }

    public function cetak($nomor_kk)
    {
        $title = "Hasil Kuesioner";
        $categorys = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE answers.nomor_kk = " . $nomor_kk . " GROUP BY questionnaires.question_category ORDER BY answers.question_id ASC");
        $subCategorys = DB::select("SELECT * FROM questionnaires GROUP BY question_category, question_subcategory ORDER BY id ASC");
        $questions = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id LEFT JOIN questionnaire_items ON answers.question_item_id = questionnaire_items.id WHERE answers.nomor_kk = " . $nomor_kk . " GROUP BY answers.question_id ORDER BY answers.question_id ASC");
        $answers = DB::select("SELECT * FROM answers LEFT JOIN questionnaire_items ON answers.question_item_id = questionnaire_items.id WHERE answers.nomor_kk = " . $nomor_kk . " AND answers.question_item_id IS NOT NULL GROUP BY answers.question_id, answers.question_item_id ORDER BY answers.question_id ASC");
        $pdf = PDF::loadview('./pages/dashboard/kuesioner/cetak', ['categorys' => $categorys, 'subCategorys' => $subCategorys, 'questions' => $questions, 'answers' => $answers]);
        // dd($subCategorys);
        return $pdf->download('laporan-kuesioner.pdf');
    }

    public function eksport()
    {
        $familys =  DB::select("SELECT * FROM answers JOIN data_keluargas ON answers.nomor_kk = data_keluargas.nomor_kk GROUP BY answers.nomor_kk");
        foreach ($familys as $k) {
            $members[$k->nomor_kk] = DataAnggotaKeluarga::where("nomor_kk", $k->nomor_kk)->get();
            $categorys[$k->nomor_kk] = DB::select("SELECT * FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id WHERE answers.nomor_kk = " . $k->nomor_kk . " GROUP BY questionnaires.question_category ORDER BY answers.question_id ASC");
            $subCategorys[$k->nomor_kk] = DB::select("SELECT * FROM questionnaires GROUP BY question_category, question_subcategory ORDER BY id ASC");
            $questions[$k->nomor_kk] = DB::select("SELECT answers.id, answers.question_id, answers.question_item_id, answers.answer, answers.nomor_kk, answers.answer_point, questionnaires.question, questionnaires.question_category, questionnaires.question_subcategory, questionnaire_items.question_item FROM answers LEFT JOIN questionnaires ON answers.question_id = questionnaires.id LEFT JOIN questionnaire_items ON answers.question_item_id = questionnaire_items.id WHERE answers.nomor_kk = " . $k->nomor_kk . " GROUP BY answers.question_id ORDER BY answers.question_id ASC");
            foreach ($questions[$k->nomor_kk] as $q) {
                $answers[$k->nomor_kk][$q->question_id] = DB::select("SELECT * FROM answers LEFT JOIN questionnaire_items ON answers.question_item_id = questionnaire_items.id WHERE answers.nomor_kk = " . $k->nomor_kk . " AND answers.question_id = " . $q->question_id . " GROUP BY answers.question_id, answers.question_item_id ORDER BY answers.question_id ASC");
            }
        }
        $pdf = PDF::loadview('./pages/dashboard/kuesioner/eksport', ['familys' => $familys, 'members' => $members, 'categorys' => $categorys, 'subCategorys' => $subCategorys, 'questions' => $questions, 'answers' => $answers]);
        // dd($subCategorys);
        return $pdf->download('laporan-kuesioner.pdf');
    }

    public function export(Request $request)
    {
        $query = DataAnggotaKeluarga::select('*')
            ->leftJoin('data_keluargas', 'data_keluargas.nomor_kk', '=', 'data_anggota_keluargas.nomor_kk');

        if ($request->has('kabkot')) {
            $query->where('kabkot', $request->kabkot);
        }

        if ($request->has('kecamatan')) {
            $query->where('kecamatan', $request->kecamatan);
        }

        if ($request->has('desa')) {
            $query->where('kelurahan', $request->desa);
        }

        $data['keluarga'] = $query->get();
        $data['questions'] = [
            'Baduta' => $this->getQuestionPerCategory('Baduta'),
            'Anak SD' => $this->getQuestionPerCategory('Anak SD'),
            'Remaja Putri' => $this->getQuestionPerCategory('Remaja Putri'),
            'Ibu atau Ibu Hamil' => $this->getQuestionPerCategory('Ibu atau Ibu Hamil'),
            'Lingkungan' => $this->getQuestionPerCategory('Lingkungan'),
        ];
        $data['title'] = 'Export';

        return view('pages/export', $data);
    }


    public function cetakExport()
    {
        return Excel::download(new AnswersExport, 'exported_answers.xlsx');
    }

    public function getQuestionPerCategory($category)
    {
        return Questionnaires::where('question_category', $category)->get();
    }
}
