<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function about()
    {
        return view('user_template.about');
    }

    public function shopPage()
    {
        $allproducts = Product::latest()->get();

        return view('user_template.shop', compact('allproducts'));
    }

    public function singleCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $allproducts = Product::latest()->where('product_category_id', $category->id)->get();

        return view('user_template.single-category', compact('category', 'allproducts'));
    }

    public function blog()
    {
        return view('user_template.blog');
    }

    public function contact()
    {
        return view('user_template.contact');
    }

    public function shoppingCart()
    {
        return view('user_template.shopping-cart');
    }

    public function checkout()
    {
        return view('user_template.checkout');
    }
}
