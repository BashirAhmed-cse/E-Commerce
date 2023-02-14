<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.allproduct',compact('products'));
    }

    public function addProduct()
    {
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        return view('admin.addproduct', compact('categories','subcategories'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
       'product_name' => 'required|unique:products',
       'price'=>'required',
       'category_id'=>'required',
       'subcategory_id'=>'required',
       'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       'quantity'=>'required',

        ]);
       $image = $request->file('image');
       $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
       $request->image->move(public_path('upload'),$image_name);
       $image_url='upload/' .$image_name;

        $category_id = $request->category_id;
        $category_name = Category::where('id', $category_id)->value('category_name');

        $subcategory_id = $request->subcategory_id;
        $subcategory_name = Subcategory::where('id', $subcategory_id)->value('subcategory_name');

        Product::insert([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'product_category_name' => $category_name,
            'product_subcategory_name' => $subcategory_name,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'image' => $image_url,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace('','-', $request->product_name))
        ]);

        Category::where('id',$category_id)->increment('product_count',1);
        Subcategory::where('id',$subcategory_id)->increment('product_count',1);
        return redirect()->route('allproduct')->with('message', 'Product Added Successfully!');
    }

    public function editProductImage($id)
    {
        $productinfo = Product::findorFail($id); 
        return view ('admin.editproductimage', compact('productinfo'));
    }
    public function updateProductImage(Request $request)
    {
        $request->validate([
          
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
             ]);
             $id = $request->id;
             $image = $request->file('image');
             $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
             $request->image->move(public_path('upload'),$image_name);
             $image_url='upload/' .$image_name;

             Product::findOrFail($id)->update([
            'image' => $image_url,
             ]);

             return redirect()->route('allproduct')->with('message', 'Product Image Updated Successfully!');
    }

    public function editProduct($id)
    {
        $editproducts = Product::findOrFail($id);
        return view ('admin.editproduct', compact('editproducts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
