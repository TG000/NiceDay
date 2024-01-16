@extends('admin.layouts.template')
@section('page_title')
All Users | Nice Day
@endsection
@section('content')
<div class="container-fluid p-5">
    <h3 class="text-primary fw-bold mb-5"><span class="text-muted fw-light">Pages / </span>All Users</h3>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="card bg-secondary">
        <h4 class="card-header text-white p-3">Available Users Information</h4>
        <div class="table-responsive text-nowrap">
            <table class="table table-dark my-0" style="--bs-table-bg: #191C24;">
                <thead>
                    <tr>
                        <th scope="col" class="px-5 py-3 text-uppercase">Id</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Username</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Email</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Role</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Status</th>
                        <th scope="col" class="px-5 py-3 text-uppercase">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="px-5 py-3 align-middle">{{ $user->id }}</td>
                        <td class="px-5 py-3 align-middle">{{ $user->name }}</td>
                        <td class="px-5 py-3 align-middle">{{ $user->email }}</td>
                        <td class="px-5 py-3 align-middle">{{ $user->roles[0]->{'display_name'} }}</td>
                        <td class="px-5 py-3 align-middle">
                            @if ($user->id !== auth()->user()->id)
                            Active
                            @else
                            <span class="text-warning">Currently In Use</span>
                            @endif
                        </td>
                        <td class="px-5 py-3 align-middle">{{ $user->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection