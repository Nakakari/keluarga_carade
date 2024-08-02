<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonPengantinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_pengantin', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('nama', 255);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('pekerjaan', 255);
            $table->enum('status_pendidikan', ['Tidak Sekolah', 'Belum Tamat SD', 'Tamat SD', 'Tamat SMP', 'Tamat SMA', 'Tamat Perguruan Tinggi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calon_pengantin');
    }
}
