<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\hewan;

class HewanSeeder extends Seeder
{
    public function run(): void
    {
        hewan::factory(100)->create();
    }
}
