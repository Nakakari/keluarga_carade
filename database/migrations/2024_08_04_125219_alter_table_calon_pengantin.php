<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCalonPengantin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calon_pengantin', function (Blueprint $table) {
            $table->enum('is_bpjs', ['Ya', 'Tidak'])->default('Tidak')->nullable();
            $table->foreignId('id_jenis_bpjs')->nullable()->references('id')->on('jenis_bpjs');
            $table->integer('pendapatan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
