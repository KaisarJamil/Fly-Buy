<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories(){
        return $this->belongsToMany('App\Subcategory','category_subcategory')->withTimestamps();
    }

    public function products(){
        return $this->hasMany('App\Product','category_id');
    }
}
