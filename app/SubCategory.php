<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function categories(){
        return $this->belongsToMany('App\Category','category_subcategory')->withTimestamps();
    }

    public function products(){
        return $this->hasMany('App\Product','subcategory_id');
    }
}
