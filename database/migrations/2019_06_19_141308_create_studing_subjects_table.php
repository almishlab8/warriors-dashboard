<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudingSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studing_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name' , 45);
            $table->integer('teachers_id');
            $table->integer('classes_ID');
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
        Schema::dropIfExists('studing_subjects');
    }
}
