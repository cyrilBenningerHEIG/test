<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCepagsVinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cepags_vins', function (Blueprint $table) {
            $table->integer('vin_id')->unsigned();
            $table->foreign('vin_id')->references('id')->on('vins');
            $table->integer('cepag_id')->unsigned();
            $table->foreign('cepag_id')->references('id')->on('cepags');
            $table->integer('pourcentage');

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
        Schema::dropIfExists('cepags_vins');
    }
}
