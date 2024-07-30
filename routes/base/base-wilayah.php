<?php

use App\Http\Controllers\Base\BaseWilayahController;
use Illuminate\Support\Facades\Route;

Route::controller(BaseWilayahController::class)->prefix('base-wilayah')->group(function () {
    //Wilayah
    Route::get('get-provinsi', 'listProvinsi')->name('base-wilayah.get-provinsi');
    Route::get('get-kabupaten', 'listKabupaten')->name('base-wilayah.get-kabupaten');
    Route::get('get-kecamatan', 'listKecamatan')->name('base-wilayah.get-kecamatan');
    Route::get('get-kelurahan', 'listKelurahan')->name('base-wilayah.get-kelurahan');
});
