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
            'name' => $this->faker->sentence(),
            'desc' => $this->faker->text(),
            'KwH' => $this->faker->randomNumber(),
            'value' => $this->faker->randomNumber(),
            'running' => $this->faker->boolean(),
        ];
    }
}
