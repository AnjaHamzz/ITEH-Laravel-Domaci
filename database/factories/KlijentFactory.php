<?php

namespace Database\Factories;

use App\Models\Banka;
use Illuminate\Database\Eloquent\Factories\Factory;

class KlijentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime' => $this->faker->name(),
            'racun' => $this->faker->unique()->numerify('#########'),
            'stanje' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 1000000),
            'banka_id' => Banka::factory()
        ];
    }
}
