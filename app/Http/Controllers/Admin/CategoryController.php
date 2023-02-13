<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.allcategory', compact('categories'));
    }

    public function addCategory()
    {
        return view ('admin.addcategory');
    }

    public function storeCategory(Request $request)
    {
         $request->validate([
           'category_name' => 'required|unique:categories'
         ]);

         Category::insert([
        'category_name' => $request->category_name,
        'slug' => strtolower(str_replace('','-', $request->category_name))
         ]);

         return redirect()->route('allcategory')->with('message', 'Category Added Successfully!');
    }
    public function editCategory($id)
    {
        $category_info = Category::findorFail($id);
        return view ('admin.editcategory',compact('category_info'));
    }

    public function updateCategory(Request $request)
    {
        $category_id = $request->category_id;
        $request->validate([
            'category_name' => 'required|unique:categories'
          ]);

          Category::findorFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace('','-', $request->category_name))
          ]);
          return redirect()->route('allcategory')->with('message', 'Category Update Successfully!');
    }

    public function deleteCategory($id)
    {
      Category::findorFail($id)->delete();
      return redirect()->route('allcategory')->with('message', 'Category Delete Successfully!');
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
