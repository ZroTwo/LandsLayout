<?php

namespace Database\Seeders;

use App\Models\Temperature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemperatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Temperature::create([
                'temperature' => rand(0, 100),
            ]);
        }
    }
}
