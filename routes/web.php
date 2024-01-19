<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/about', 'about')->name('user.about');
    Route::get('/shop', 'shopPage')->name('user.shop');
    Route::get('/shop/{slug}', 'singleCategory')->name('user.singlecategory');
    Route::get('/blog', 'blog')->name('user.blog');
    Route::get('/contact', 'contact')->name('user.contact');
    Route::get('/shopping-cart', 'shoppingCart')->name('user.shoppingcart');
    Route::get('/checkout', 'checkout')->name('user.checkout');
});

// Signed in - User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Signed in - Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/all-categories', 'index')->name('admin.allcategories');
        Route::get('/admin/add-category', 'addCategory')->name('admin.addcategory');
        Route::post('/admin/store-category', 'storeCategory')->name('admin.storecategory');
        Route::get('/admin/edit-category/{id}', 'editCategory')->name('admin.editcategory');
        Route::post('/admin/update-category', 'updateCategory')->name('admin.updatecategory');
        Route::get('/admin/delete-category/{id}', 'deleteCategory')->name('admin.deletecategory');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/all-products', 'index')->name('admin.allproducts');
        Route::get('/admin/add-product', 'addProduct')->name('admin.addproduct');
        Route::post('/admin/store-product', 'storeProduct')->name('admin.storeproduct');
        Route::get('/admin/edit-product-img/{id}', 'editProductImg')->name('admin.editproductimg');
        Route::post('/admin/update-product-img', 'updateProductImg')->name('admin.updateproductimg');
        Route::get('/admin/edit-product/{id}', 'editProduct')->name('admin.editproduct');
        Route::post('/admin/update-product', 'updateProduct')->name('admin.updateproduct');
        Route::get('/admin/delete-product/{id}', 'deleteProduct')->name('admin.deleteproduct');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/pending-orders', 'index')->name('admin.pendingorders');
        Route::get('/admin/completed-orders', 'completedOrders')->name('admin.completedorders');
        Route::get('/admin/canceled-orders', 'canceledOrders')->name('admin.canceledorders');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/admin/all-users', 'index')->name('admin.allusers');
    });

    Route::controller(PageController::class)->group(function () {
        Route::get('/admin/blog', 'index')->name('admin.blog');
        Route::get('/admin/faq', 'faq')->name('admin.faq');
    });
});


require __DIR__ . '/auth.php';
