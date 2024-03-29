<?php

use App\Http\Controllers\ProductController;
use App\Http\Livewire\Admin\Categories;
use App\Http\Livewire\Admin\Permissions;
use App\Http\Livewire\Admin\Products;
use App\Http\Livewire\Admin\Roles;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\Home;
use App\Http\Livewire\ShoppingCart;
use App\Http\Livewire\Store;
use App\Http\Livewire\Success;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', Home::class);
Route::get('/', Home::class)->name('home');
Route::get('/store', Store::class)->name('store');
Route::get('/cart', ShoppingCart::class)->name('cart');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/product-details', function (){
    return view('product-details');
});

Route::get('checkout', Checkout::class)->name('checkout');
Route::get('success', Success::class)->name('success');
Route::get('product/{product:slug}', [ProductController::class, 'details'])->name('details');
Route::get('/rave/callback', [App\Http\Controllers\FlutterwaveController::class, 'callback'])->name('callback');

Route::middleware(['auth'])->group(function () {
    Route::get('admin', function () {
        return redirect('admin/products');
    });
    Route::get('admin/roles', Roles::class)->name('roles');
    Route::get('admin/permissions', Permissions::class)->name('permissions');
    Route::get('admin/users', Users::class)->name('users');
    Route::get('admin/categories', Categories::class)->name('categories');
    Route::get('admin/products', Products::class)->name('products');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
