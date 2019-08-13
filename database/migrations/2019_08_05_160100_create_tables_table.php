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
            $table->string('class_name')->nullable(); // أسم الصف
            $table->string('days')->nullable(); ///unique// الأيام
            $table->string('lesson')->nullable(); // الدرس
            $table->string('material_name')->nullable(); // نوع المادة
            $table->string('name')->nullable(); // اسم المدرس
            $table->string('time_from')->nullable(); // من كذا وقت
            $table->string('time_to')->nullable(); // الى كذا وقت
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
