<?php

namespace Database\Seeders;

use App\Models\MealIngredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MealIngredient::factory()->count(10)->create();
    }
}
