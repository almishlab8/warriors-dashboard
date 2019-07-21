<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('gender' , 45);
            $table->string('qualifications' , 255);
            $table->string('address' , 255);
            $table->string('phone_no' , 255);
            $table->dateTime('birthday');
            $table->string('teacher_documents' , 255);
            $table->integer('USER_ID');
            $table->string('teacher_certificate', 255);
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
        Schema::dropIfExists('teachers');
    }
}
