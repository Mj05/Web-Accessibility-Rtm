<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImageWtg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_wtg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weburl_id');
            $table->integer('total_image');
            $table->integer('total_alt');
            $table->float('image_weightage');
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
        Schema::dropIfExists('image_wtg');
    }
}
