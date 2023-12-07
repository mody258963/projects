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


    public function adminPage(Product $product){
        $product = Product::all();
       return view('pages.listOfProduct',[
            'products' => $product
        ]);
    }

    public function store(Request $request){
  //dd($request);
        $code= random_int(1000000,99999999);

        $data =  $request->validate([
             'title' => 'required|max:1255|min:3|string',
             'description'=> 'required|max:1255|min:3|string',
             'weight'=> 'required|max:1255|min:1',
             'image'=> 'image|required|max:2032',
             'quantity'=> 'required|max:1255|min:1',
             'link'=> 'required|max:1255|min:1'
         ]);
         $image = '';
         if($request->has('image')){
             $image  = $request->file("image")->store('public/posts');
         }
         $image = str_replace('public','storage',$image);
         $data['image'] = $image;
         $data['user_id'] = Auth::user()->id;
         $data['code'] = $code;
        //  unset($data['_token']);
         return  Product::create($data);
        //  $user = Auth::user();
        //  if(!$user){
        //      return abort(403);
        //  }
        //  $product = Product::create($data);
        //  if($product){
        //      session()->flash("message","post edited successfully");
        //      return redirect(route('pages.dashboard'));
        //  }

        //  return redirect()->back()->with('error','This post not created');
     }


    public function priceEditing(Request $request,$id){
    $data = $request->validate([
    'price' => 'required',
    ]);

    $product = Product::find($id);
    $product->price = $request->price;
    $product->save();

    return redirect()->back();

    }
   public function rejection($id){
        $product = Product::find($id);
       $product->status = 'rejected' ;
            $product->save();
            return redirect()->back();
}
}
