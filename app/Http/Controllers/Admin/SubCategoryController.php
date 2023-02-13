<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allsubcategories = Subcategory::orderBy('id', 'DESC')->get();
        return view ('admin.allsubcategory',compact('allsubcategories'));
    }

    public function addSubCategory()
    {
        $categories = Category::latest()->get();
        return view ('admin.addsubcategory', compact('categories'));
    }

    public function storeSubCategory(Request $request)
    {
        $request->validate([
      'subcategory_name'=>'required|unique:subcategories',
      'category_id' => 'required'
        ]);

        $category_id = $request->category_id;
        $category_name= Category::where('id',$category_id)->value('category_name');

        Subcategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace('','-', $request->subcategory_name)),
            'category_id' =>$category_id,
            'category_name'=>$category_name

        ]);
        Category::where('id',$category_id)->increment('subcategory_count',1);
        return redirect()->route('allsubcategory')->with('message', 'Sub Category Added Successfully!');
    }

    public function editSubCategory($id)
    {
        $subcategory_info = Subcategory::findorFail($id);
        return view ('admin.editsubcategory',compact('subcategory_info'));
    }

    public function updateSubCategory(Request $request)
    {
        $subcategory_id = $request->subcategory_id;
        $request->validate([
            'subcategory_name'=>'required|unique:subcategories',
              ]);
              Subcategory::findorFail($subcategory_id)->update([
                'subcategory_name' => $request->subcategory_name,
                'slug' => strtolower(str_replace('','-', $request->subcategory_name))
              ]);
              return redirect()->route('allsubcategory')->with('message', 'Sub Category Update Successfully!');
    }

    public function deleteSubCategory($id)
    {
        $category_id = Subcategory::where('id', $id)->value('category_id');
        Subcategory::findorFail($id)->delete();
        Category::where('id', $category_id)->decrement('subcategory_count',1);

      return redirect()->route('allsubcategory')->with('message', 'Sub Category Delete Successfully!');
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
