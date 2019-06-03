<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeVinsDescriptionColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vins', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->text('descriptionText')->after('nom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vins', function (Blueprint $table) {
            $table->dropColumn('descriptionText');
            $table->string('description')->after('nom');
        });
    }
}
