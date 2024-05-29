<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Device::create([
                'name' => $this->generateRandomString(60),
                'token' => Str::random(100),
            ]);
        }
    }

    private function generateRandomString($length = 60)
    {
        return Str::random($length);
    }
}
