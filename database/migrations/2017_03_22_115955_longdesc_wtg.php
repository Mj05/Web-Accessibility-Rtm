<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LongdescWtg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('longdesc_wtg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weburl_id');
            $table->integer('total_images');
            $table->integer('total_longdesc');
            $table->float('longdesc_weightage');
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
