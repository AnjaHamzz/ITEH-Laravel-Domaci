<?php

namespace Database\Seeders;

use App\Models\Banka;
use Illuminate\Database\Seeder;

class BankaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banka::factory()->count(50)->create();
    }
}
