<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesVinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types_vins', function (Blueprint $table) {
            $table->integer('vin_id')->unsigned();
            $table->foreign('vin_id')->references('id')->on('vins');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');

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
        Schema::dropIfExists('types_vins');
    }
}
