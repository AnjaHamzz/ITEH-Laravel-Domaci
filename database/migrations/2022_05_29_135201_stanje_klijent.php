<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StanjeKlijent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('klijents', function (Blueprint $table) {
            $table->after('racun', function ($table) {
                $table->double('stanje');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('klijents', function (Blueprint $table) {
            $table->dropColumn('stanje');
        });
    }
}
