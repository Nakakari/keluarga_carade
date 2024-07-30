<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAnggotaKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anggota_keluarga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_keluarga');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('status_pernikahan', ['Belum Menikah', 'Menikah', 'Cerai Mati', 'Cerai Hidup']);
            $table->date('tanggal_kelahiran');
            $table->integer('umur');
            $table->enum('status', ['Bayi atau Balita', 'Anak SD', 'Remaja Putri', 'Ibu atau Ibu Hamil', 'Lainnya']);
            $table->enum('status_pendidikan', ['Tidak Sekolah', 'Belum Tamat SD', 'Tamat SD', 'Tamat SMP', 'Tamat SMA', 'Tamat Perguruan Tinggi']);
            $table->string('pekerjaan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_anggota_keluarga');
    }
}
