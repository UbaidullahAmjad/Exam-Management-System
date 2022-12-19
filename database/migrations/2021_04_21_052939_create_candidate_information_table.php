<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('users');
            $table->string('username');
            $table->string('fname');
            $table->string('lname');
            $table->string('nationality');
            $table->string('place_of_birth');
            $table->date('dob');
            $table->string('passport_no')->default(null);
            $table->string('email')->default(null);
            $table->string('mobile_no');
            $table->string('phone_no')->default(null);
            $table->string('emirates_id')->default(null);
            $table->string('generated_id')->default(null);
            $table->string('gender')->default(null);
            $table->integer('post_code');
            $table->string('emirates');
            $table->string('marital_status');
            $table->string('spoken_language')->default(null);
            $table->string('experience')->default(null);
            $table->string('address')->default(null);
            $table->string('approval_id')->default(null);
            $table->string('emirates_attachs')->default(null);
            $table->string('passport_attachs')->default(null);
            $table->string('photo_attachs')->default(null);
            $table->string('qualification_attachs')->default(null);
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
        Schema::dropIfExists('candidate_information');
    }
}
