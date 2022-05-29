<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BankaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'sediste' => $this->faker->address(),
            'broj_zaposlenih' => $this->faker->numberBetween($min = 1, $max = 1500),
            'broj_filijala' => $this->faker->numberBetween($min = 1, $max = 100)
        ];
    }
}
