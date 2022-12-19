<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('duration');
            $table->integer('no_of_question');
            $table->string('status');
            $table->dateTime('conduct_time');
            $table->string('select_question_type');
            $table->string('show_result');
            $table->string('result_type');
            $table->string('send_result_email');
            $table->string('record_audio_or_video');
            $table->string('passing_marks');
            $table->string('price_of_exam');
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
        Schema::dropIfExists('exams');
    }
}
