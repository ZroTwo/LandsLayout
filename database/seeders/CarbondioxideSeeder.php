<?php

namespace Database\Seeders;

use App\Models\Carbondioxide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarbondioxideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Carbondioxide::create([
                'carbondioxide' => rand(0, 100),
            ]);
        }
    }
}
