<?php

namespace App\Http\Controllers\Admin;

use App\Color;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
    public function index(){
        return view('admin.addcolor');
    }

    public function colorlist(){
        $colors=Color::all();
        return view('admin.colorlist',compact('colors'));
    }

    public function store(Request $request){
        $val=Validator::make($request->all(),[
            'color'=>'required|string|max:191',
        ]);
        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }
        $color=new Color();
        $color->name=$request->color;
        $color->save();

        return redirect()->back()->with('success','Successfully Added the color');
    }

    public function destroy($id){
        $color=Color::findOrFail($id);
        if (isset($color->id)){
            if ($color->products->count()>0){
                return redirect()->back()->with('error','This Category is already used.');
            }
            $color->delete();
            return redirect()->back()->with('success','Successfully Deleted the Color');
        }
        return redirect()->back();
    }
}
