<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.pending-orders');
    }

    public function completedOrders()
    {
        return view('admin.completed-orders');
    }

    public function canceledOrders()
    {
        return view('admin.canceled-orders');
    }
}
