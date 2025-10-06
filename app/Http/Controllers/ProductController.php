<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('home');

        // $products=Product::all();
    }

    // public function create(){
    //     return view('home');
    // }

    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'name'=>'required',
            'details'=>'required',
            'image'=>'required|image',
        ]);
        if($request->hasFile('image')){
            $imagename= time().'.'.$request->image->extension();
            $request->image->move(public_path('imagesf'),$imagename);

        }

        Product::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>$imagename
        ]);
        return back();
    }
}
