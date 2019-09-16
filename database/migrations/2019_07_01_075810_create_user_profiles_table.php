<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id') ;
            $table->string('brithday')->nullable();
            $table->integer('gender')->nullable() ;
            $table->string('status_number')->nullable() ;
            $table->string('phone')->nullable() ;
            $table->string('address')->nullable() ;
            $table->string('Academic_achievement')->nullable() ;
            $table->string('documents')->nullable() ;
            $table->string('cv')->nullable() ;
            $table->string('graduationـcertificate')->nullable() ;
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
        Schema::dropIfExists('user_profile');
    }
}
