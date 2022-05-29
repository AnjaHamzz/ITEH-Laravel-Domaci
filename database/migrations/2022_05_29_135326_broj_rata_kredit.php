<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BrojRataKredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kredits', function (Blueprint $table) {
            $table->after('kamata', function ($table) {
                $table->integer('broj_rata');
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
        Schema::table('kredits', function (Blueprint $table) {
            $table->dropColumn('broj_rata');
        });
    }
}
