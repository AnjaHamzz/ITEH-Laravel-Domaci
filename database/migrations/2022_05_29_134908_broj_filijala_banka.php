<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BrojFilijalaBanka extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bankas', function (Blueprint $table) {
            $table->renameColumn('filijale', 'broj_filijala');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bankas', function (Blueprint $table) {
            $table->renameColumn('broj_filijala', 'filijale');
        });
    }
}
