<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MunicipalityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'municipality_name' => $this->faker->city,
            'county_id' => rand(1,21)
        ];
    }
}
