<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TinyImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiny_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tiny_one')->nullable();
            $table->string('tiny_two')->nullable();
            $table->string('tiny_three')->nullable();
            $table->string('tiny_four')->nullable();
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
