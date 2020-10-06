<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function subcategory(){
        return $this->belongsTo('App\Subcategory');
    }

    public function colors(){
        return $this->belongsToMany('App\Color','color_product')->withTimestamps();
    }

    public function sizes(){
        return $this->belongsToMany('App\Size','product_size')->withTimestamps();
    }
}
