<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender', 255);
            $table->string('name', 255);
            $table->string('student_no');
            $table->string('address', 255);
            $table->string('phone_no', 255);
            $table->date('birthday')->nullable();
            $table->string('student_documents', 255)->nullable();
            $table->integer('USERS_ID')->default(0);
            $table->integer('classes_ID')->default(0);
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
        Schema::dropIfExists('students');
    }
}
