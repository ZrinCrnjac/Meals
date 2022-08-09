<?php

namespace Database\Factories;

use App\Models\MealIngredient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MealIngredient>
 */
class MealIngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ingredient_id' => (rand(1,10)),
            'meal_id' => (rand(1,10)),
        ];
    }
}
