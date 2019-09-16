<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('class_id_table');       // أسم الصف
            $table->integer('material_id_table');    // نوع المادة
            $table->integer('teacher_id');             // اسم المدرس
            $table->integer('day_id');             // اسم المدرس
            $table->integer('lesson_id');             // اسم المدرس
            $table->time('time_from');            // من كذا وقت
            $table->time('time_to');           // الى كذا وقت
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
        Schema::dropIfExists('tables');
    }
}
