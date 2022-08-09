<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealTag extends Model
{
    use HasFactory;

    protected $table = 'meal_tag';
    protected $fillable = ['meal_id', 'tag_id'];
}
