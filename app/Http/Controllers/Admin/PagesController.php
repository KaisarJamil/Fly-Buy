<?php

namespace App\Http\Controllers\Admin;

use App\about;
use App\socialLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index(){
        return view('admin.addsociallink');
    }

    public function updateLinks(Request $request){
        $val = Validator::make($request->all(),
            [
                'facebook'=>'required|string|max:191',
                'twitter'=>'required|string|max:191',
                'instagram'=>'required|string|max:191',
                'linkedin'=>'required|string|max:191',
            ]);
        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $sociallink = new socialLink();
        $sociallink->fb= $request->facebook;
        $sociallink->twt= $request->twitter;
        $sociallink->insta= $request->instagram;
        $sociallink->lnkIn= $request->linkedin;
        $sociallink->save();

        return redirect()->back()->with('success','Successfully Updated Social Links');
    }

    public function about_index(){
        $about = about::first();
        return view('admin.aboutus',compact('about'));
    }

    public function updateAbout(Request $request){

        $val=Validator::make($request->all(), [

            'title'=>'required|string|max:191',
            'image'=>'required|image|mimes:jpg,jpeg,png',
            'description'=>'required|string',
            'phone'=>'required|string|max:13',
            'mobile'=>'required|string|max:13',
            'fax'=>'required|string|max:13',
            'email'=>'required|string|',
            'address'=>'required|string|',
            'house'=>'required|string|',
            'city'=>'required|string| max:25',
            'postal'=>'required|string| max:10',
        ]);

        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $checkExist = about::first();
        if (isset($checkExist->id)){
            $about=$checkExist;
            $about->title=$request->title;
            $about->image=$request->image;
            $about->description=$request->description;
            $about->phonenumber=$request->phone;
            $about->mobile=$request->mobile;
            $about->fax=$request->fax;
            $about->email=$request->email;
            $about->address=$request->address;
            $about->housenumber=$request->house;
            $about->city=$request->city;
            $about->postalcode=$request->postal;
            $about->save();
            return redirect()->back()->with('success','Successfully update Content');
        }else{
            $about=new about();
            $about->title=$request->title;
            $about->image=$request->image;
            $about->description=$request->description;
            $about->phonenumber=$request->phone;
            $about->mobile=$request->mobile;
            $about->fax=$request->fax;
            $about->email=$request->email;
            $about->address=$request->address;
            $about->housenumber=$request->house;
            $about->city=$request->city;
            $about->postalcode=$request->postal;
            $about->save();
            return redirect()->back()->with('success','Successfully Added Content');
        }




    }

}
