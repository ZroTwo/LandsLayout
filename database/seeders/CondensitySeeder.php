<?php

namespace Database\Seeders;

use App\Models\Condensity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CondensitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Condensity::create([
                'condensity' => rand(0, 100),
            ]);
        }
    }
}
