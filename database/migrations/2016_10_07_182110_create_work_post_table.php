<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_posts', function (Blueprint $table) {
            $table->increments('wp_id');
            $table->string('wp_pic');
            $table->string('wp_titel');
            $table->string('wp_total');
            $table->string('wp_detail');
            $table->string('wp_location');
            $table->string('wp_description');
            $table->string('wp_property');
            $table->integer('wp_tel');
            $table->string('wp_fb');
            $table->string('wp_email');
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
        Schema::drop('work_posts');
    }
}
