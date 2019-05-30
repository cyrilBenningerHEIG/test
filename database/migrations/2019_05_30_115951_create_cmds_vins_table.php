<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmdsVinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmds_vins', function (Blueprint $table) {
            $table->integer('cmd_id')->unsigned();
            $table->foreign('cmd_id')->references('id')->on('cmds');
            $table->integer('vin_id')->unsigned();
            $table->foreign('vin_id')->references('id')->on('vins');
            $table->integer('quantite');
            
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
        Schema::dropIfExists('cmds_vins');
    }
}
