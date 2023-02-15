<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      $allproducts = Product::orderBy('id', 'DESC')->get();
       return view ('user_template.layouts.home',compact('allproducts'));
   }
}
