<?php

use App\Http\Controllers\APIDataKeluargaController;
use App\Http\Controllers\APIDataAnggotaKeluargaController;
use App\Http\Controllers\APIUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('get_user', [APIUserController::class, 'all']);
Route::get('data_keluarga', [APIDataKeluargaController::class, 'all']);
Route::get('data_anggota_keluarga', [APIDataAnggotaKeluargaController::class, 'all']);

Route::post('create_user', [APIUserController::class, 'createUser']);
Route::post('login', [APIUserController::class, 'login']);
Route::post('create_keluarga', [APIDataKeluargaController::class, 'createKeluarga']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [APIUserController::class, 'logout']);
    Route::get('data_keluarga/{id}', [APIDataKeluargaController::class, 'show']);
    Route::put('edit_keluarga/{id}', [APIDataKeluargaController::class, 'update']);
    Route::delete('delete_keluarga/{id}', [APIDataKeluargaController::class, 'destroy']);
});
