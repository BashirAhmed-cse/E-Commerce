<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class UiController extends Controller
{
    public function categoryPage($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->latest()->get();
        return view('user_template.layouts.category',compact('category','products'));
    }

    public function singleProductPage($id)
    {

        $products = Product::findOrFail($id);
        $categories = Category::findOrFail($id);
        $subcategories = Subcategory::findOrFail($id);

        $subcategory_id= Product::where('id', $id)->value('subcategory_id');
        $related_products = Product::where('subcategory_id',$subcategory_id)->latest()->get();

        return view('user_template.layouts.singleproduct', compact('products','categories','subcategories','related_products'));
    }
    public function addToCart()
    {
        return view('user_template.layouts.addtocart');
    }
    public function checkOut()
    {
        return view('user_template.layouts.checkout');
    }
    public function userProfile()
    {
        return view('user_template.layouts.userprofile');
    }


    public function newRelase()
    {
        return view('user_template.layouts.newrelase');
    }
    public function todaysDeal()
    {
        return view('user_template.layouts.todaysdeal');
    }
    public function customerService()
    {
        return view('user_template.layouts.customerservice');
    }
}
