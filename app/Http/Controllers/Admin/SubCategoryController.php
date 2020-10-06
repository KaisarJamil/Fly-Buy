<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.addsubcat',compact('categories'));
    }

    public function subcatlist(){
        $sub_categories = SubCategory::all();
        return view('admin.subcatlist',compact('sub_categories'));
    }

    public function store(Request $request){
        $val=Validator::make($request->all(),[

           'sub_category'=>'required|string|max:191',

        ]);
        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $subCat = new SubCategory();
        $subCat->name=$request->sub_category;
        $subCat->save();

        $subCat->categories()->attach($request->categories);
        return redirect()->back()->with('success','Successfully Added the Sub-Category');
    }

    public function destroy($id){

        $sub_category=SubCategory::findOrFail($id);

        if (isset($sub_category->id)){
            //check if the Sub-Category is already used
            if ($sub_category->products->count()>0){
                return redirect()->back()->with('error','This Sub-Category is already used.');
            }
            $categories = $sub_category->categories;
            $sub_category->categories()->detach($categories);

            $sub_category->delete();

            return redirect()->back()->with('success','Successfully Deleted the Sub-Category');
        }
        return redirect()->back();

    }
}
