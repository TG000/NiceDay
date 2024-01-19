@extends('admin.layouts.template')
@section('page_title')
Edit Product | Nice Day
@endsection
@section('content')
<div class="container-fluid p-5">
    <h3 class="text-primary fw-bold mb-5"><span class="text-muted fw-light">Pages / </span>Edit Product</h3>
    <div class="container-fluid bg-secondary rounded">
        <h3 class="d-flex justify-content-between align-items-center my-0">
            <span class="h4 my-4 pt-1 pb-3 fw-light">
                Edit Current Product
            </span>
            <span class="text-muted fs-5 my-4 pt-1 pb-3 fw-lighter">
                Input information
            </span>
        </h3>
        <form action="{{ route('admin.updateproduct') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $product_info->id }}">
            <div class="pb-4 d-flex align-items-start">
                <label for="product_name" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Name</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="product_name" name="product_name" placeholder="Rock T-Shirt" value="{{ $product_info->product_name }}">
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="price" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Price</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="price" name="price" placeholder="150000" value="{{ $product_info->price }}">
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="quantity" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Quantity</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="quantity" name="quantity" placeholder="1000" value="{{ $product_info->quantity }}">
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_short_des" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Short <br> Description</label>
                <textarea class="form-control bg-light text-white py-2 ps-3" id="product_short_des" name="product_short_des" cols="30" rows="2">{{ $product_info->product_short_des }}</textarea>
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_long_des" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Long <br> Description</label>
                <textarea class="form-control bg-light text-white py-2 ps-3" id="product_long_des" name="product_long_des" cols="30" rows="5">{{ $product_info->product_long_des }}</textarea>
            </div>
            <div class="pb-4 d-flex">
                <div class="col-sm-2"></div>
                <div>
                    <button class="btn py-2 px-4 my-1 d-flex justify-content-center btn btn-danger" type="submit">Update Product</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection