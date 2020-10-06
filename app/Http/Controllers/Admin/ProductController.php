<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Color;
use App\Product;
use App\Size;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index(){
        $sub_categories=SubCategory::all();
        $categories=Category::all();
        $sizes= Size::all();
        $colors= Color::all();
        return view('admin.addproduct',compact('sub_categories','categories','sizes','colors'));
    }
    public function store(Request $request){
        $val=Validator::make($request->all(),[
           'name'=>'required|string|max:191',
            'category'=>'required|not_in:0|exists:categories,id',
            'sub_category'=>'required|not_in:0|exists:sub_categories,id',
           'colors'=>'required|not_in:0|exists:colors,id',
           'sizes'=>'required|not_in:0|exists:sizes,id',
           'price'=>'required|integer',
            'image'=>'required|image|mimes:jpg,gif,png,jpeg',
        ]);
        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }
        //dd($request);
        $image=$request->file('image');
        if (isset($image)){
            $imgName=Str::slug($request->name).uniqid().'.'.$image->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('product')){
                Storage::disk('public')->makeDirectory('product');
            }

            $im=Image::make($image)->resize(300,300)->stream();
            Storage::disk('public')->put('product/'.$imgName,$im);

            $product= new Product();
            $product->name=$request->name;
            $product->price=$request->price;
            if (isset($imgName)){
                $product->image= $imgName;
            }
            $product->category_id=$request->category;
            $product->subcategory_id=$request->sub_category;
            $product->feature_product=$request->feature_product;
            $product->save();

            $product->colors()->attach($request->colors);
            $product->sizes()->attach($request->sizes);


            return redirect()->back()->with('success','Successfully Added the Product');
        }
    }

    public function productlist(){
        $products=Product::all();
        return view('admin.productlist',compact('products'));
    }

    public function destroy($id){

        $product=Product::findOrFail($id);
        if (isset($product->id)){
            $colors=$product->colors;
            $product->colors()->detach($colors);

            $sizes=$product->size;
            $product->sizes()->detach($sizes);

            if (Storage::disk('public')->exists('product/'.$product->image)){
                Storage::disk('public')->delete('product/'.$product->image);
            }

            $product->delete();
            return redirect()->back()->with('success','Successfully Deleted the Product');
        }
        return redirect()->back();
    }

    public function edit($id){
        $product=Product::findOrFail($id);
        $categories=Category::all();
        $sub_categories=SubCategory::all();
        $colors=Color::all();
        $sizes=Size::all();
        if (isset($product->id)){
            return view('admin.editproduct',compact('product','categories','sub_categories','colors','sizes'));
        }
        return redirect()->back();
    }

    public function update(Request $request){

        $val=Validator::make($request->all(),[
            'name'=>'required|string|max:191',
            'category'=>'required|not_in:0|exists:categories,id',
            'sub_category'=>'required|not_in:0|exists:sub_categories,id',
            'colors'=>'required|not_in:0|exists:colors,id',
            'sizes'=>'required|not_in:0|exists:sizes,id',
            'price'=>'required|integer',
            'image'=>'required|image|mimes:jpg,gif,png,jpeg',


        ]);

        $product=Product::findOrFail($request->product_id);  //???????????????????????????????????????

        $image = $request->file('image');
        if (isset($image)){
            $imgName = Str::slug($request->name).uniqid().'.'.$image->getClientOriginalExtension();

            if (Storage::disk('public')->exists('product/'.$product->image)){
                Storage::disk('public')->delete('product/'.$product->image);
            }
            $img = Image::make($image)->resize(300,300)->stream();
            Storage::disk('public')->put('product/'.$imgName,$img);

        }

        $product->name=$request->name;
        $product->price=$request->price;
        if (isset($imgName)){
            $product->image= $imgName;
        }
        $product->category_id=$request->category;
        $product->subcategory_id=$request->sub_category;
        $product->feature_product=$request->feature_product;
        $product->save();

        $product->colors()->sync($request->colors);
        $product->sizes()->sync($request->sizes);

        return redirect()->back()->with('success','Successfully Updated');
    }
}
