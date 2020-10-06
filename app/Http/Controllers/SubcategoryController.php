<?php

namespace App\Http\Controllers;

use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index($id){
        $subcate=SubCategory::findOrFail($id);
        $products=$subcate->products;
        return view('user.subcate',compact('products'));
    }
}
