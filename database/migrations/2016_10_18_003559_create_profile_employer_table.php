<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_employer', function (Blueprint $table) {
            $table->increments('em_id');
            $table->string('em_pic');
            $table->string('em_name');
            $table->string('em_location');
            $table->string('em_tel');
            $table->string('em_fb');
            $table->string('em_email');
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
        Schema::drop('profile_employer');
    }
}
