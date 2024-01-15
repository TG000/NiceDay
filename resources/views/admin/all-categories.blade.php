@extends('admin.layouts.template')
@section('page_title')
All Categories | Nice Day
@endsection
@section('content')
<div class="container-fluid p-5">
    <h3 class="text-primary fw-bold mb-5"><span class="text-muted fw-light">Pages / </span>All Categories</h3>
    <div class="card bg-secondary">
        <h4 class="card-header text-white p-3">Available Category Information</h4>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table table-dark my-0" style="--bs-table-bg: #191C24;">
                <thead>
                    <tr>
                        <th scope="col" class="px-5 py-3 text-uppercase">Id</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Category Name</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Product</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Slug</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td class="px-5 py-3 align-middle">{{ $category->id }}</td>
                        <td class="px-5 py-3 align-middle">{{ $category->category_name }}</td>
                        <td class="px-5 py-3 align-middle">{{ $category->product_count }}</td>
                        <td class="px-5 py-3 align-middle">{{ $category->slug }}</td>
                        <td class="px-5 py-3 align-middle">
                            <a href="{{ route('admin.editcategory', $category->id) }}" class="btn btn-light">Edit</a>
                            <a href="{{ route('admin.deletecategory', $category->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection