<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->dateTime('hw_date');
            $table->integer('studing_subjects_ID');
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
        Schema::dropIfExists('home_works');
    }
}
