<?php

namespace Database\Factories;

use App\Models\Klijent;
use Illuminate\Database\Eloquent\Factories\Factory;

class KreditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'iznos' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 100, $max = 1000000),
            'valuta' => $this->faker->randomElement($array = array('RSD', 'RUB', 'EUR', 'USD', 'CHF', 'GBP', 'AUD',)),
            'kamata' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 10),
            'broj_rata' => $this->faker->numberBetween($min = 1, $max = 100),
            'klijent_id' => Klijent::factory()
        ];
    }
}
