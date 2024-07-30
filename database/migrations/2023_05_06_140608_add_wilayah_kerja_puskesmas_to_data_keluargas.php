<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWilayahKerjaPuskesmasToDataKeluargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_keluargas', function (Blueprint $table) {
            $table->string('wilayah_kerja_puskesmas')->after('nomor_kk')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_keluargas', function (Blueprint $table) {
            $table->dropColumn('wilayah_kerja_puskesmas');
        });
    }
}
