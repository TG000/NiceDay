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
        <form action="" method="POST">
            <div class="pb-4 d-flex align-items-start">
                <label for="product_name" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Name</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="product_name" name="product_name" placeholder="Rock T-Shirt">
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_price" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Price</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="product_price" name="product_price" placeholder="150000">
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_quantity" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Quantity</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="product_quantity" name="product_quantity" placeholder="1000">
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_short_description" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Short <br> Description</label>
                <textarea class="form-control bg-light text-white py-2 ps-3" id="product_short_description" name="product_short_description" cols="30" rows="2"></textarea>
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_long_description" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Long <br> Description</label>
                <textarea class="form-control bg-light text-white py-2 ps-3" id="product_long_description" name="product_long_description" cols="30" rows="5"></textarea>
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_image" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Category</label>
                <select class="form-select bg-light text-white d-flex align-items-center justify-content-between" id="product_category" name="product_category">
                    <option selected>Select One</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="pb-4 d-flex align-items-start">
                <label for="product_image" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Product Image</label>
                <div class="d-flex align-items-center justify-content-between">
                    <input type="file" class="form-control bg-light text-white py-2 ps-3" id="product_image" name="product_image" multiple>
                    <button class="btn btn-danger text-nowrap ms-3">Image Preview</button>
                </div>
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