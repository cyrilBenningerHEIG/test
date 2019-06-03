<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProdusDescriptionColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produs', function (Blueprint $table) {
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
        Schema::table('produs', function (Blueprint $table) {
            $table->dropColumn('descriptionText');
            $table->string('description')->after('nom');
        });
    }
}
