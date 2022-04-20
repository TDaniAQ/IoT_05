<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sensor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sensors = Sensor::pluck('id')->toArray();
        $factories = Factory::pluck('id')->toArray();
        return [
            'type' => $this->faker->randomNumber(),
            'sensorid' => $this->factory->randomElement($sensors),
            'factoryid' => $this->faker->randomNumber($factories)
        ];
    }
}
