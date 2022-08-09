<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = ['title_en', 'title_es', 'title_hr'];

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class, "meal_ingredient", "meal_id", "ingredient_id");
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, "meal_tag", "meal_id", "tag_id");
    }
}
