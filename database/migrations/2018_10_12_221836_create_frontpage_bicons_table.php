<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontpageBiconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontpage_bicons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_button_one')->nullable();
            $table->string('cat_button_two')->nullable();
            $table->string('cat_button_three')->nullable();
            $table->string('cat_button_four')->nullable();
            $table->string('footer_button')->nullable();
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
        Schema::dropIfExists('frontpage_bicons');
    }
}
