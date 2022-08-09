<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\Tag;
use App\Models\Ingredient;
use Illuminate\Support\Facades\DB;

class MealController extends Controller
{
    public function tagIndex(Request $request, Meal $meal){

        return view('mealTag', [
            'meals' => Meal::all(),
            'tag_id' => $request->id
        ]);
    }

    public function ingredientIndex(Request $request, Meal $meal){

        return view('mealIngredient', [
            'meals' => Meal::all(),
            'ingredient_id' => $request->id
        ]);
    }
}
