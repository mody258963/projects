<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function productspage(){
    return view('pages.addProduct');

   }


}
