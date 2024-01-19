<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            if (Auth::user()->roles[0]->{'name'} === "admin") {
                return redirect()->route('admin.dashboard');
            }
        }

        $bestseller = Product::orderBy('quantity', 'asc')->take(8)->get();
        return view('user_template.home', compact('bestseller'));
    }
}
