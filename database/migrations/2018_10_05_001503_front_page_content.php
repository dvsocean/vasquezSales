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
            $table->string('performance', 500)->default('REPLACE WITH CONTENT');
            $table->string('finance', 500)->default('REPLACE WITH CONTENT');
            $table->string('repair', 500)->default('REPLACE WITH CONTENT');
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
