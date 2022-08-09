<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Tag;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $locale = app()->getLocale();

        $per_page = $request->per_page;




        return view('home', [
            'meals' => Meal::simplePaginate($per_page)->withQueryString(),
            'tags' => Tag::all(),
            'ingredients' => Ingredient::all(),
        ]);
    }
}
