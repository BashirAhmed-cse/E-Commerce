@extends('admin.layouts.template')

@section('page_title')
All - SubCategory
@endsection

@section('mainContent')

<div class="container">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Sub Category</h4>
    <div class="card">
        <h5 class="card-header">Available Sub Category Information</h5>
        @if(session()->has('message'))
        <div class="alert alert-success">
         {{ session()->get('message')}}
        </div>
     @endif
        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Sub Category Name</th>
                  <th>Category</th>
                  <th>Product</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($allsubcategories as $key=>$subcategory)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$subcategory->subcategory_name}}</td>
                    <td>{{$subcategory->category_name}}</td>
                    <td>{{$subcategory->product_count}}</td>
                    <td>
                        <a href="{{route('editsubcategory',$subcategory->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{route('deletesubcategory',$subcategory->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>

@endsection