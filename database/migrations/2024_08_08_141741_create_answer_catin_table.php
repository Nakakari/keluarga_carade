<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerCatinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_catin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_calon_pengantin')->references('id')->on('calon_pengantin');
            $table->foreignId('id_quisioner_catin')->references('id')->on('quisioner_catin');
            $table->foreignId('id_detail_quisioner_catin')->nullable()->references('id')->on('detail_quisioner_catin');
            $table->string('detail');
            $table->integer('point');
            $table->foreignId('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('answer_catin');
    }
}
