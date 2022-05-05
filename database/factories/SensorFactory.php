<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SensorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'desc' => $this->faker->text(),
            'KwH' => random_int(1,100),
            'value' => $this->faker->randomNumber(),
            'running' => $this->faker->boolean(),
        ];
    }
}
