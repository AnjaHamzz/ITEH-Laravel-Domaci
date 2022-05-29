<?php

namespace Database\Seeders;

use App\Models\Kredit;
use Illuminate\Database\Seeder;

class KreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kredit::factory()->count(35)->create();
    }
}
