@extends('admin.layouts.template')

@section('page_title')
All - Product
@endsection


@section('mainContent')

<div class="container">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Product</h4>
    <div class="card">
        <h5 class="card-header">Available Product Information</h5>
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
                  <th>Product Name</th>
                  <th>Photo</th>
                  <th>Quantity</th>
                  <th>Short Description</th>
                  <th>Long Description</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Sub Category</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $key=>$product)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>
                      <img src="{{asset($product->image)}}" alt="" style="width: 50px">
                      <br>
                      <a href="{{route('editproductimage',$product->id)}}" class="btn btn-primary btn-sm">Update Image</a>
                    </td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->product_short_des}}</td>
                    <td>{{$product->product_long_des}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->product_category_name}}</td>
                    <td>{{$product->product_subcategory_name}}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
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