<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @method static find()
 * @method static all(int $int)
 */
class FrontPageContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_page_contents', function (Blueprint $table) {
            $table->integer('id')->default(1);

            $table->string('main_title')->nullable();

            $table->string('heading_one')->nullable();
            $table->text('body_one')->nullable();
            $table->string('heading_two')->nullable();
            $table->text('body_two')->nullable();
            $table->string('heading_three')->nullable();
            $table->text('body_three')->nullable();

            $table->string('quad_title')->nullable();

            $table->string('quad_heading_one')->nullable();
            $table->text('quad_body_one')->nullable();
            $table->string('quad_heading_two')->nullable();
            $table->text('quad_body_two')->nullable();
            $table->string('quad_heading_three')->nullable();
            $table->text('quad_body_three')->nullable();
            $table->string('quad_heading_four')->nullable();
            $table->text('quad_body_four')->nullable();

            $table->string('footer_title')->nullable();

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
