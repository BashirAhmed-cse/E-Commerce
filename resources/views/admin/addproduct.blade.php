@extends('admin.layouts.template')


@section('page_title')
Add - Product
@endsection

@section('mainContent')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Category</h4>
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add New Product</h5>
            {{-- <small class="text-muted float-end">Default label</small> --}}
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="product Name" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Short Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Long Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Product Price" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                <div class="col-sm-10">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                  <option selected>Select Category</option>
                  <option value="1">Electronic</option>
                  <option value="2">Dresh</option>
                  <option value="3">Three</option>
                </select>
              </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Category Name</label>
                <div class="col-sm-10">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                  <option selected>Select Sub Category</option>
                  <option value="1">Electronic</option>
                  <option value="2">Dresh</option>
                  <option value="3">Three</option>
                </select>
              </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                <div class="col-sm-10">
                  <input class="form-control" type="file" id="formFileMultiple" multiple />
              </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection