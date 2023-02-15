<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function categoryPage()
    {
        return view('user_template.layouts.category');
    }

    public function singleProductPage()
    {
        return view('user_template.layouts.singleproduct');
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
