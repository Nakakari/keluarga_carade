<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestionnaireItemIdToAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->bigInteger("question_item_id")->after("question_id");
            $table->dropColumn("answer_category");
            $table->dropColumn("answer_type");
            $table->dropColumn("answer");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->dropColumn("question_item_id");
            $table->string("answer_category");
            $table->string("answer_type");
            $table->string("answer");
        });
    }
}
