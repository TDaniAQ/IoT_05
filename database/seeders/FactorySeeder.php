<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Factory;
use App\Models\Equipment;
use App\Models\EquipmentType;
use App\Models\Sensor;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory::factory()->count(10)->create();
        Sensor::factory()->count(100)->create();
        Equipment::factory()->count(40)->create();
        EquipmentType::factory()->count(5)->create();
    }
}
