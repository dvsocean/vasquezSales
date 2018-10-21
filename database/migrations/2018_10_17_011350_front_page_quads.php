<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FrontPageQuads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_page_quads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quad_one')->nullable();
            $table->string('quad_two')->nullable();
            $table->string('quad_three')->nullable();
            $table->string('quad_four')->nullable();
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
        //
    }
}
