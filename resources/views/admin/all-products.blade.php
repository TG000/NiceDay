@extends('admin.layouts.template')
@section('page_title')
All Products | Nice Day
@endsection
@section('content')
<div class="container-fluid p-5">
    <h3 class="text-primary fw-bold mb-5"><span class="text-muted fw-light">Pages / </span>All Products</h3>
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
                    <tr>
                        <td class="px-5 py-3 align-middle">1</td>
                        <td class="px-5 py-3 align-middle">Rock T-Shirt</td>
                        <td class="px-5 py-3 align-middle">150000</td>
                        <td class="px-5 py-3 align-middle">1000</td>
                        <td class="px-5 py-3 align-middle">Electronics</td>
                        <td class="px-5 py-3 align-middle">None</td>
                        <td class="px-5 py-3 align-middle">
                            <a href="" class="btn btn-light">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection