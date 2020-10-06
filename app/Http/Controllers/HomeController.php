<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $featured_products=Product::inRandomOrder()->where('feature_product',1)->get();
        //dd($fp);
        $products=Product::inRandomOrder()->limit(8)->get();
        return view('welcome',compact('featured_products','products'));
    }
    public function welcome()
    {
        $featured_products=Product::inRandomOrder()->where('feature_product',1)->get();
        //dd($fp);
        $products=Product::inRandomOrder()->limit(8)->get();
        return view('welcome',compact('featured_products','products'));
    }
}
