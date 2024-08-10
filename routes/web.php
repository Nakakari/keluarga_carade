<?php

use App\Http\Controllers\AnswersController;
use App\Http\Controllers\CatinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\DataAnggotaKeluargaController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/data_keluarga', [DataKeluargaController::class, 'index'])->name('data.keluarga.index');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('data.dashboard.index')->middleware('is_admin');

// keluarga
Route::get('/data_keluarga', [DataKeluargaController::class, 'index'])->name('data.keluarga.index')->middleware('is_admin');
Route::get('/data_keluarga/create', [DataKeluargaController::class, 'create'])->name('data.keluarga.create')->middleware('is_admin');
Route::get('/data_keluarga/{id}/edit', [DataKeluargaController::class, 'edit'])->name('data.keluarga.edit')->middleware('is_admin');
Route::post('/data_keluarga', [DataKeluargaController::class, 'store'])->middleware('is_admin');
Route::put('/data_keluarga/{id}', [DataKeluargaController::class, 'update'])->middleware('is_admin');
Route::delete('/data_keluarga/{id}', [DataKeluargaController::class, 'destroy'])->middleware('is_admin');

// anggota keluarga
Route::get('/data_anggota_keluarga/{nomor_kk}', [DataAnggotaKeluargaController::class, 'index'])->name('data.anggota.index')->middleware('is_admin');
Route::get('/data_anggota_keluarga/create/{nomor_kk}', [DataAnggotaKeluargaController::class, 'create'])->name('data.anggota.create')->middleware('is_admin');
Route::get('/data_anggota_keluarga/{id}/edit', [DataAnggotaKeluargaController::class, 'edit'])->name('data.anggota.edit')->middleware('is_admin');
Route::post('/data_anggota_keluarga', [DataAnggotaKeluargaController::class, 'store'])->middleware('is_admin');
Route::put('/data_anggota_keluarga/{id}', [DataAnggotaKeluargaController::class, 'update'])->middleware('is_admin');
Route::delete('/data_anggota_keluarga/{id}', [DataAnggotaKeluargaController::class, 'destroy'])->middleware('is_admin');

// Kuesioner
Route::get('/kuesioner', [AnswersController::class, 'index'])->name('kuesioner.index')->middleware('is_admin');
Route::get('/kuesioner/export', [AnswersController::class, 'export']);
Route::get('/kuesioner/create/{nomor_kk}/{id_anggota_keluarga}', [AnswersController::class, 'create'])->name('kuesioner.create')->middleware('is_admin');
Route::get('/kuesioner/{nomor_kk}/{id_anggota_keluarga}/edit', [AnswersController::class, 'edit'])->name('kuesioner.edit')->middleware('is_admin');
Route::put('/kuesioner/{id_anggota_keluarga}/update', [AnswersController::class, 'update'])->name('kuesioner.update')->middleware('is_admin');
Route::get('/kuesioner/get_data/{nomor_kk}', [AnswersController::class, 'get_data'])->name('kuesioner.get_data')->middleware('is_admin');
Route::post('/kuesioner', [AnswersController::class, 'store'])->name('kuesioner.store')->middleware('is_admin');
Route::post('/kuesioner/check', [AnswersController::class, 'check_status'])->middleware('is_admin');
Route::delete('/kuesioner/{nomor_kk}', [AnswersController::class, 'destroy'])->middleware('is_admin');
Route::get('/kuesioner/cetak/{nomor_kk}', [AnswersController::class, 'cetak'])->name('kuesioner.cetak')->middleware('is_admin');
Route::get('/kuesioner/eksport', [AnswersController::class, 'eksport'])->name('kuesioner.eksport')->middleware('is_admin');
// Edit Kuisioner Keluarga - LAinnya
Route::get('/keluarga-kuesioner/{nomor_kk}/edit', [AnswersController::class, 'editKeluarga'])->name('kuesioner.edit-keluarga')->middleware('is_admin');
Route::put('/keluarga-kuesioner/update', [AnswersController::class, 'updateKeluarga'])->name('kuesioner.update-keluarga')->middleware('is_admin');

// user
Route::get('/data_user', [UserController::class, 'index'])->name('user.index')->middleware('is_admin');
Route::get('/data_user/create', [UserController::class, 'create'])->name('user.create')->middleware('is_admin');
Route::get('/data_user/{id}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('is_admin');
Route::post('/data_user', [UserController::class, 'store'])->name('user.store')->middleware('is_admin');
Route::put('/data_user/{id}', [UserController::class, 'update'])->middleware('is_admin');
Route::delete('/data_user/{id}', [UserController::class, 'destroy'])->middleware('is_admin');

// CALON PENGANTIN PEREMPUAN
Route::get('/catin', [CatinController::class, 'index'])->name('catin.index')->middleware('is_admin');
Route::get('/catin/create', [CatinController::class, 'create'])->name('catin.create')->middleware('is_admin');
Route::get('/catin/{id}/edit', [CatinController::class, 'edit'])->name('catin.edit')->middleware('is_admin');
Route::post('/catin', [CatinController::class, 'store'])->name('catin.store')->middleware('is_admin');
Route::put('/catin/{id}', [CatinController::class, 'update'])->name('catin.update')->middleware('is_admin');
Route::delete('/catin/{id}', [CatinController::class, 'destroy'])->name('catin.delete')->middleware('is_admin');
Route::get('/catin/quiz/{id}', [CatinController::class, 'quiz'])->name('catin.quiz')->middleware('is_admin');
Route::post('/catin/quiz/save', [CatinController::class, 'quizStore'])->name('catin.quiz-store')->middleware('is_admin');
Route::get('/catin/edit-quiz/{id}', [CatinController::class, 'quizEdit'])->name('catin.edit-quiz')->middleware('is_admin');
Route::put('/catin/quiz/update', [CatinController::class, 'quizUpdate'])->name('catin.quiz-update')->middleware('is_admin');
Route::delete('/catin/quiz/{id}', [CatinController::class, 'quizDestroy'])->name('catin.quiz-delete')->middleware('is_admin');
Route::get('/catin/export', [CatinController::class, 'export'])->name('catin.export')->middleware('is_admin');

require __DIR__ . '/base/base-wilayah.php';

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
//     Route::name('dashboard.')->prefix('dashboard')->group(function () {
//         Route::get('/', [DashboardController::class, 'index'])->name('index');

//         Route::middleware(['admin'])->group(function () {
//             Route::resource('keluarga', DataKeluargaController::class);
//         });
//     });
// });
