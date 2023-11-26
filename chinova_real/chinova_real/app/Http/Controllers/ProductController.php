<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
   public function productspage(){
    return view('pages.addProduct');

   }


   public function store(Request $request){


      $data =  $request->validate([
           'description' => 'required|max:1255|min:3|string',
           'title'=> 'required|max:1255|min:3|string',
           'price'=> 'required|max:1255|min:1',
           'wieght'=> 'required|max:1255|min:1',
           'image'=> 'image|required|max:2032',
       ]);
       $image = '';
       if($request->has('image')){
           $image  = $request->file("image")->store('public/posts');
       }
       $image = str_replace('public','storage',$image);
       $data['image'] = $image;
       $data['user_id'] = 2;
       $user = Auth::user();
       if(!$user){
           return abort(403);
       }
       $post = Product::create($data);
       if($post){
           session()->flash("message","post edited successfully");
           return redirect(route('posts.index'));
       }
}
}