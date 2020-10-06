<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class CategoryController extends Controller
{
    public function index(){

        return view('admin.addcategory');
    }

    public function catlist(){
        $categories = Category::all();
        return view('admin.categorylist',compact('categories'));
    }

    public function store(Request $request){

        $val=Validator::make($request->all(),[

            'category'=>'required|string|max:191',

        ]);
        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $category = new Category();
        $category->name = $request->category;
        $category->slug = Str::slug($request->category);
        $category->save();

        return redirect()->back()->with('success','Successfully added the Category');
    }

    public function destroy($id){
        $cat=Category::findOrFail($id);

        if (isset($cat->id)){
            if ($cat->products->count()>0){
                return redirect()->back()->with('error','This Category is already used.');
            }
            $cat->delete();
            return redirect()->back()->with('success','Successfully Deleted the Category');
        }
        return redirect()->back();
    }
}
