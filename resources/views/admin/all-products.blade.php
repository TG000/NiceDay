@extends('admin.layouts.template')
@section('page_title')
All Products | Nice Day
@endsection
@section('content')
<div class="container-fluid p-5">
    <h3 class="text-primary fw-bold mb-5"><span class="text-muted fw-light">Pages / </span>All Products</h3>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="card bg-secondary">
        <h4 class="card-header text-white p-3">Available Product Information</h4>
        <div class="table-responsive text-nowrap">
            <table class="table table-dark my-0" style="--bs-table-bg: #191C24;">
                <thead>
                    <tr>
                        <th scope="col" class="px-5 py-3 text-uppercase">Id</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Product Name</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Price</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Quantity</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Category Name</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Image</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td class="px-5 py-3 align-middle">{{ $product->id }}</td>
                        <td class="px-5 py-3 align-middle">{{ $product->product_name }}</td>
                        <td class="px-5 py-3 align-middle">{{ Number::currency($product->price, 'VND') }}</td>
                        <td class="px-5 py-3 align-middle">{{ $product->quantity }}</td>
                        <td class="px-5 py-3 align-middle">{{ $product->product_category_name }}</td>
                        <td class="px-5 py-3 align-middle">
                            <img src="{{ asset($product->product_img) }}" alt="product image" class="object-fit-cover" style="width: 100px; height: 100px">
                        </td>
                        <td class="px-5 py-3 align-middle">
                            <div class="my-1">
                                <a href="{{ route('admin.editproduct', $product->id) }}" class="btn btn-light">Edit</a>
                                <a href="{{ route('admin.deleteproduct', $product->id) }}" class="btn btn-danger">Delete</a>
                            </div>
                            <a href="{{ route('admin.editproductimg', $product->id) }}" class="btn btn-light text-white my-1">Update Image</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection