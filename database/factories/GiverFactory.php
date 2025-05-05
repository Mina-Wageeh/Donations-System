<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Giver>
 */
class GiverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return
        [
            'name' => $this->faker->name(),
            'address' => $this->faker->sentence(),
            'phone' => $this->faker->regexify('01[0125][0-9]{7}'),
        ];
    }
}
