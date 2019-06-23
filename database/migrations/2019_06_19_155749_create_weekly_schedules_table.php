<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeklySchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject_name' , 255);
            $table->dateTime('start_at');
            $table->dateTime('end_at');
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
        Schema::dropIfExists('weekly_schedules');
    }
}
