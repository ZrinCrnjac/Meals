<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name_en', 'name_es', 'name_hr'];

    public function meals(){
        return $this->belongsToMany(Meal::class, "meal_tag", "tag_id", "meal_id");
    }
}
