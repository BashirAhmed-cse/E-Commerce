@extends('admin.layouts.template')

@section('page_title')
All - Category
@endsection


@section('mainContent')

<div class="container">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Category</h4>
    <div class="card">
        <h5 class="card-header">Available Category Information</h5>
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
                  <th>Category Name</th>
                  <th>Sub Category</th>
                  <th>Slug</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $key=>$category)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->subcategory_count}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        <a href="{{route('editcategory',$category->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{route('deletecategory',$category->id)}}" class="btn btn-danger btn-sm">Delete</a>
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

{{-- @section('script')
<script>
  response.setIntHeader("Refresh", 1);
  </script>
@endsection --}}