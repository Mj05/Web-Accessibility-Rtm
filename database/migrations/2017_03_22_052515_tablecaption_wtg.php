<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablecaptionWtg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablecaption_wtg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weburl_id');
            $table->integer('total_tables');
            $table->integer('total_captions');
            $table->float('tablecaption_weightage');
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
        Schema::dropIfExists('tablecaption_wtg');
    }
}
