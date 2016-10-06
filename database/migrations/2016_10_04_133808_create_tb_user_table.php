<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('std_id');
            $table->string('user_name');
            $table->string('password');
            $table->string('name');
            $table->string('lastname');
            $table->string('britday');
            $table->integer('sex');
            $table->string('email');
            $table->string('tel');
            $table->text('address');
            $table->string('facebook');
            $table->integer('status');
            $table->rememberToken();
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
        Schema::dropIfExists('tb_user');
    }
}
