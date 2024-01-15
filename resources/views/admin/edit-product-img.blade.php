@extends('admin.layouts.template')
@section('page_title')
Edit Product Image | Nice Day
@endsection
@section('content')
<div class="container-fluid p-5">
    <h3 class="text-primary fw-bold mb-5"><span class="text-muted fw-light">Pages / </span>Edit Product Image</h3>
    <div class="container-fluid bg-secondary rounded">
        <h3 class="d-flex justify-content-between align-items-center my-0">
            <span class="h4 my-4 pt-1 pb-3 fw-light">
                Edit Current Product Image
            </span>
            <span class="text-muted fs-5 my-4 pt-1 pb-3 fw-lighter">
                Input information
            </span>
        </h3>
        <form action="{{ route('admin.updateproductimg') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="pb-4 d-flex align-items-start">
                <label for="product_name" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Previous Image</label>
                <img src="{{ asset($product_info->product_img) }}" alt="product image" class="object-fit-cover" style="width: 400px; height: 400px;">
            </div>
            <input type="hidden" name="id" value="{{ $product_info->id }}">
            <div class="pb-4 d-flex align-items-start">
                <label for="product_img" class="form-label col-sm-2 my-0 text-uppercase fw-bold">New Image</label>
                <input type="file" class="form-control bg-light text-white py-2 ps-3" id="product_img" name="product_img" multiple>
            </div>
            <div class="pb-4 d-flex">
                <div class="col-sm-2"></div>
                <div>
                    <button class="btn py-2 px-4 my-1 d-flex justify-content-center btn btn-danger" type="submit">Update Product Image</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection