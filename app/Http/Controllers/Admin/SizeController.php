<?php

namespace App\Http\Controllers\Admin;

use App\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Psy\Util\Str;

class SizeController extends Controller
{
    public function index(){
        return view('admin.addsize');
    }

    public function sizelist(){
        $sizes=Size::all();
        return view('admin.sizelist',compact('sizes'));
    }

    public function store(Request $request){
        $val=Validator::make($request->all(),[

            'size'=>'required|string|max:191',

        ]);
        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $size = new Size();
        $size->size = $request->size;
        //$size->slug = Str::slug($request->size);
        $size->save();

        return redirect()->back()->with('success','Successfully Added the Size');
    }

    public function destroy($id){
        $size=Size::findOrFail($id);
        if (isset($size->id)){
            if ($size->products->count()>0){
                return redirect()->back()->with('error','This Category is already used.');
            }
            $size->delete();
            return redirect()->back()->with('success','Successfully Deleted the Size');
        }
        return redirect()->back();
    }


}
