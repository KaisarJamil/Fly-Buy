<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderedProductController extends Controller
{
    public function index(){
        return view('admin.pending');
    }

    public function delivered(){
        return view('admin.delivered');
    }

}
