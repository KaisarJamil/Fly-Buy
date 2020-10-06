<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function man(){
        $cat=Category::where('id',1)->first();
        $products=$cat->products;
        return view('user.catman',compact('products'));
    }
    public function woman(){
        $cat=Category::where('id',4)->first();
        $products=$cat->products;
        return view('user.catwoman',compact('products'));
    }
    public function kid(){
        $cat=Category::where('id',2)->first();
        $products=$cat->products;
        return view('user.catkid',compact('products'));
    }
}
