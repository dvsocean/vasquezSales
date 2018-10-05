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
            $table->string('heading_one');
            $table->text('body_one');
            $table->string('heading_two');
            $table->text('body_two');
            $table->string('heading_three');
            $table->text('body_three');
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
