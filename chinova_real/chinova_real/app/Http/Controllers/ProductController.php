<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
   public function productspage(){
    return view('pages.addProduct');

   }


   public function store(Request $request){

       //dd($request);

       $code = random_int(1,9999999999);

      $data =  $request->validate([
           'description' => 'required|max:1255|min:3|string',
           'title'=> 'required|max:1255|min:3|string',
           'link'=> 'required',
           'weight'=> 'required|max:1255|min:1',
           'image'=> 'image|required|max:2032',
           'quntity'=> 'required|max:500|min:1'
       ]);
       $image = '';
       if($request->has('image')){
           $image  = $request->file("image")->store('public/posts');
       }
       $image = str_replace('public','storage',$image);
       $data['image'] = $image;
       $data['user_id'] = 1;
       $data['code'] = $code;
      //  $user = Auth::user();
      //  if(!$user){
      //      return abort(403);
      //  }
       $post = Product::create($data);

       if($post){
           session()->flash("message","post edited successfully");
           return redirect(route('posts.index'));
       }
}
}
