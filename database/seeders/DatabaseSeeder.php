<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $bankaSeeder = new BankaSeeder;
        $klijentSeeder = new KlijentSeeder;
        $kreditSeeder = new KreditSeeder;

        $kreditSeeder->run();
        $klijentSeeder->run();
        $bankaSeeder->run();
    }
}
