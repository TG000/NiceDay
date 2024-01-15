@extends('admin.layouts.template')
@section('page_title')
Add Product | Nice Day
@endsection
@section('content')
<div class="container-fluid p-5">
    <h3 class="text-primary fw-bold mb-5"><span class="text-muted fw-light">Pages / </span>Add Product</h3>
    <div class="container-fluid bg-secondary rounded">
        <h3 class="d-flex justify-content-between align-items-center my-0">
            <span class="h4 my-4 pt-1 pb-3 fw-light">
                Add New Product
            </span>
            <span class="text-muted fs-5 my-4 pt-1 pb-3 fw-lighter">
                Input information
            </span>
        </h3>
        <form action="{{ route('admin.storeproduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="pb-4 d-flex align-items-start">
                <label for="product_name" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Name</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="product_name" name="product_name" placeholder="Rock T-Shirt">
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="price" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Price</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="price" name="price" placeholder="150000">
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="quantity" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Quantity</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="quantity" name="quantity" placeholder="1000">
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_short_des" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Short <br> Description</label>
                <textarea class="form-control bg-light text-white py-2 ps-3" id="product_short_des" name="product_short_des" cols="30" rows="2"></textarea>
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_long_des" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Long <br> Description</label>
                <textarea class="form-control bg-light text-white py-2 ps-3" id="product_long_des" name="product_long_des" cols="30" rows="5"></textarea>
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_category_id" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Category</label>
                <select class="form-select bg-light text-white d-flex align-items-center justify-content-between" id="product_category_id" name="product_category_id">
                    <option selected>Select Product Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_img" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Image</label>
                <input type="file" class="form-control bg-light text-white py-2 ps-3" id="product_img" name="product_img" multiple>
            </div>
            <div class="pb-4 d-flex">
                <div class="col-sm-2"></div>
                <div>
                    <button class="btn py-2 px-4 my-1 d-flex justify-content-center btn btn-danger" type="submit">Add Product</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection