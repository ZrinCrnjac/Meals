<?php

namespace Database\Seeders;

use App\Models\MealTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MealTag::factory()->count(10)->create();
    }
}
