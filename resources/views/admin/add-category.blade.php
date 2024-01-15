@extends('admin.layouts.template')
@section('page_title')
Add Category | Nice Day
@endsection
@section('content')
<div class="container-fluid p-5">
    <h3 class="text-primary fw-bold mb-5"><span class="text-muted fw-light">Pages / </span>Add Category</h3>
    <div class="container-fluid bg-secondary rounded">
        <h3 class="d-flex justify-content-between align-items-center my-0">
            <span class="h4 my-4 pt-1 pb-3 fw-light">
                Add New Category
            </span>
            <span class="text-muted fs-5 my-4 pt-1 pb-3 fw-lighter">
                Input information
            </span>
        </h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('storecategory') }}" method="POST">
            @csrf
            <div class="pb-4 d-flex align-items-start">
                <label for="category_name" class="form-label col-sm-2 my-0 text-uppercase fw-bold">Category Name</label>
                <input type="text" class="form-control bg-light text-white py-2 ps-3" id="category_name" name="category_name" placeholder="Electronics">
            </div>
            <div class="pb-4 d-flex">
                <div class="col-sm-2"></div>
                <div>
                    <button class="btn py-2 px-4 my-1 d-flex justify-content-center btn btn-danger" type="submit">Add Category</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection