<?php

namespace App\Http\Controllers;

use App\about;
use App\DirectMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MoreController extends Controller
{
    public function about(){
        $abouts=about::all();
        return view('user.aboutus',compact('abouts'));
    }
    public function contact(){
        $contacts=about::all();
        return view('user.contactus',compact('contacts'));
    }

    public function store(Request $request){
        $val=Validator::make($request->all(),[
            'name'=>'required|string|max:50',
            'email'=>'required|string|max:50',
            'phone' => 'required|max:13|numeric',
            'subject' => 'required|string|max:50',
            'message' => 'required|string|max:255',
        ]);

        if($val->fails()){
          return redirect()->back()->withErrors($val)->withInput();
        }

        $dmessage=new DirectMessage();
        $dmessage->name=$request->name;
        $dmessage->email=$request->email;
        $dmessage->phone=$request->phone;
        $dmessage->subject=$request->subject;
        $dmessage->message=$request->message;
        $dmessage->save();

    }
}
