<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.all-products', compact('products'));
    }

    public function addProduct()
    {
        $categories = Category::get();
        return view('admin.add-product', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
            'product_category_id' => 'required',
            'product_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $image = $request->file('product_img');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;

        $category_id = $request->product_category_id;

        $category_name = Category::where('id', $category_id)->value('category_name');

        Product::create([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'product_category_name' => $category_name,
            'product_category_id' => $request->product_category_id,
            'product_img' => $img_url,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace(' ', '-', $request->product_name))
        ]);

        Category::where('id', $category_id)->increment('product_count', 1);

        return redirect()->route('admin.allproducts')->with('message', 'Product Added Successfully!');
    }

    public function editproductimg($id)
    {
        $product_info = Product::findOrFail($id);
        return view('admin.edit-product-img', compact('product_info'));
    }

    public function updateProductImg(Request $request)
    {
        $request->validate([
            'product_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $id = $request->id;
        $image = $request->file('product_img');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;

        Product::findOrFail($id)->update([
            'product_img' => $img_url
        ]);

        return redirect()->route('admin.allproducts')->with('message', 'Product Image Updated Successfully!');
    }

    public function editProduct($id)
    {
        $product_info = Product::findOrFail($id);

        return view('admin.edit-product', compact('product_info'));
    }

    public function updateProduct(Request $request)
    {
        $product_id = $request->id;

        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
        ]);

        Product::findOrFail($product_id)->update([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace(' ', '-', $request->product_name))
        ]);

        return redirect()->route('admin.allproducts')->with('message', 'Product Updated Successfully!');
    }

    public function deleteProduct($id)
    {
        $category_id = Product::where('id', $id)->value('product_category_id');

        Product::findOrFail($id)->delete();

        Category::where('id', $category_id)->decrement('product_count', 1);

        return redirect()->route('admin.allproducts')->with('message', 'Product Deleted Successfully!');
    }
}
