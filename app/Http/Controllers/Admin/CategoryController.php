<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.all-categories', compact('categories'));
    }

    public function addCategory()
    {
        return view('admin.add-category');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name))
        ]);

        return redirect()->route('admin.allcategories')->with('message', 'Category Added Successfully!');
    }

    public function editCategory($id)
    {
        $category_info = Category::findOrFail($id);

        return view('admin.edit-category', compact('category_info'));
    }

    public function updateCategory(Request $request)
    {
        $category_id = $request->category_id;

        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name))
        ]);

        return redirect()->route('admin.allcategories')->with('message', 'Category Updated Successfully!');
    }

    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('admin.allcategories')->with('message', 'Category Deleted Successfully!');
    }
}
