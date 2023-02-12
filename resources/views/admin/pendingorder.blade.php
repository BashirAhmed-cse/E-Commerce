@extends('admin.layouts.template')

@section('page_title')
Pending Order
@endsection

@section('mainContent')

<div class="container">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Product</h4>
    <div class="card">
        <h5 class="card-header">Available Product Information</h5>
        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Photo</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total Price</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>Electronics</td>
                    <td>Photo</td>
                    <td>50</td>
                    <td>100</td>
                    <td>5000</td>
                    <td>Approve</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>

@endsection