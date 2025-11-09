<?php

use App\Http\Controllers\Dashboard\GalleriesController;
use App\Http\Controllers\Dashboard\loginController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Dashboard\WorksController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\BrandController;
use App\Http\Controllers\Dashboard\CategareyController;
use App\Http\Controllers\Dashboard\ContactusController;
use App\Http\Controllers\Dashboard\OrdersController;
use App\Http\Controllers\Dashboard\ProductsController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\SubcategareyController;
use App\Http\Controllers\Dashboard\usercontroller;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\UsefulLinksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\LloginController;



Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('home.index');

    Route::prefix('admins')->group(function () {
        Route::get('index', [AdminController::class, 'index'])->name('admins.index');
        Route::get('create', [AdminController::class, 'create'])->name('admins.create');
        Route::post('store', [AdminController::class, 'store'])->name('admins.store');
        Route::get('edit/{id}', [AdminController::class, 'edit'])->name('admins.edit');
        Route::put('update/{id}', [AdminController::class, 'update'])->name('admins.update');
        Route::delete('delete/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');
    });

    Route::prefix('users')->group(function () {
        Route::get('index', [UserController::class, 'index'])->name('users.index');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::post('store', [UserController::class, 'store'])->name('users.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::put('update/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('delete/{id}', [UserController::class, 'delete'])->name('users.destroy');
    });

    Route::prefix('categarey')->group(function () {
        Route::get('index', [CategareyController::class, 'index'])->name('categarey.index');
        Route::get('create', [CategareyController::class, 'create'])->name('categarey.create');
        Route::post('store', [CategareyController::class, 'store'])->name('categarey.store');
        Route::get('edit/{id}', [CategareyController::class, 'edit'])->name('categarey.edit');
        Route::put('update/{id}', [CategareyController::class, 'update'])->name('categarey.update');
        Route::delete('delete/{id}', [CategareyController::class, 'delete'])->name('categarey.destroy');
    });

    Route::prefix('subcategarey')->group(function () {
        Route::get('index', [SubcategareyController::class, 'index'])->name('subcategarey.index');
        Route::get('create', [SubcategareyController::class, 'create'])->name('subcategarey.create');
        Route::post('store', [SubcategareyController::class, 'store'])->name('subcategarey.store');
        Route::get('edit/{id}', [SubcategareyController::class, 'edit'])->name('subcategarey.edit');
        Route::put('update/{id}', [SubcategareyController::class, 'update'])->name('subcategarey.update');
        Route::delete('{id}', [SubcategareyController::class, 'destroy'])->name('subcategarey.destroy');
    });

    Route::prefix('setting')->group(function () {
        Route::get('index', [SettingController::class, 'index'])->name('setting.index');
        Route::get('create', [SettingController::class, 'create'])->name('setting.create');
        Route::post('store', [SettingController::class, 'store'])->name('setting.store');
        Route::delete('delete/{id}', [SettingController::class, 'destroy'])->name('setting.destroy');
    });

    Route::prefix('brand')->group(function () {
        Route::get('index', [BrandController::class, 'index'])->name('brand.index');
        Route::get('create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('store', [BrandController::class, 'store'])->name('brand.store');
        Route::get('edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
        Route::put('update/{id}', [BrandController::class, 'update'])->name('brand.update');
        Route::delete('delete/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
    });

    Route::prefix('blog')->group(function () {
        Route::get('index', [BlogController::class, 'index'])->name('blog.index');
        Route::get('create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('delete/{id}', [BlogController::class, 'delete'])->name('blog.destroy');
    });

    Route::prefix('contactus')->group(function () {
        Route::get('index', [ContactusController::class, 'index'])->name('contactus.index');
        Route::delete('delete/{id}', [ContactusController::class, 'destroy'])->name('contactus.destroy');
        Route::post('post', [ContactusController::class, 'store'])->name('contuctus.store');
    });

    Route::prefix('orders')->group(function () {
        Route::get('index', [OrdersController::class, 'index'])->name('orders.index');
        Route::post('show/{id}', [OrdersController::class, 'show'])->name('orders.show');
        Route::delete('delete/{id}', [OrdersController::class, 'delete'])->name('orders.destroy');
    });

    Route::prefix('usefullink')->group(function () {
        Route::get('index', [UsefulLinksController::class, 'index'])->name('usefullink.index');
        Route::get('create', [UsefulLinksController::class, 'create'])->name('usefullink.create');
        Route::post('store', [UsefulLinksController::class, 'store'])->name('usefullink.store');
        Route::get('edit/{id}', [UsefulLinksController::class, 'edit'])->name('usefullink.edit');
        Route::put('update/{id}', [UsefulLinksController::class, 'update'])->name('usefullink.update');
        Route::delete('delete/{id}', [UsefulLinksController::class, 'delete'])->name('usefullink.destroy');
    });

    Route::prefix('product')->group(function () {
        Route::get('index', [ProductsController::class, 'index'])->name('product.index');
        Route::get('create', [ProductsController::class, 'create'])->name('product.create');
        Route::post('store', [ProductsController::class, 'store'])->name('product.store');
        Route::get('edit/{id}', [ProductsController::class, 'edit'])->name('product.edit');
        Route::put('update/{id}', [ProductsController::class, 'update'])->name('product.update');
        Route::delete('delete/{id}', [ProductsController::class, 'delete'])->name('product.destroy');
    });

    Route::prefix('works')->group(function () {
        Route::get('index', [WorksController::class, 'index'])->name('works.index');
        Route::get('create', [WorksController::class, 'create'])->name('works.create');
        Route::post('store', [WorksController::class, 'store'])->name('works.store');
        Route::get('edit/{id}', [WorksController::class, 'edit'])->name('works.edit');
        Route::put('update/{id}', [WorksController::class, 'update'])->name('works.update');
        Route::delete('delete/{id}', [WorksController::class, 'delete'])->name('works.destroy');
    });

    Route::prefix('services')->group(function () {
        Route::get('index', [ServicesController::class, 'index'])->name('services.index');
        Route::get('create', [ServicesController::class, 'create'])->name('services.create');
        Route::post('store', [ServicesController::class, 'store'])->name('services.store');
        Route::get('edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
        Route::put('update/{id}', [ServicesController::class, 'update'])->name('services.update');
        Route::delete('delete/{id}', [ServicesController::class, 'delete'])->name('services.destroy');
    });

    Route::prefix('galleries')->group(function () {
        Route::get('index', [GalleriesController::class, 'index'])->name('galleries.index');
        Route::get('create', [GalleriesController::class, 'create'])->name('galleries.create');
        Route::post('store', [GalleriesController::class, 'store'])->name('galleries.store');
        Route::get('edit/{id}', [GalleriesController::class, 'edit'])->name('galleries.edit');
        Route::put('update/{id}', [GalleriesController::class, 'update'])->name('galleries.update');
        Route::delete('delete/{id}', [GalleriesController::class, 'delete'])->name('galleries.destroy');
    });

 Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});


Route::middleware('guest:admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
});

// ✅ Routes for guest users (login)
Route::middleware('guest:admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
});

// ✅ Routes for admin/dashboard
Route::middleware('auth:admin')->prefix('dashboard')->group(function () {
    Route::prefix('product')->group(function () {
        // ...
    });

    Route::prefix('works')->group(function () {
        // ...
    });

    Route::prefix('services')->group(function () {
        // ...
    });

    Route::prefix('galleries')->group(function () {
        // ...
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// ✅ Routes for users/site

// ✅ Routes for users/site
Route::get('/cart/{id}', [CartController::class, 'detailsshowcart'])->name('cart.details');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::get('/cart/clear/{orderId}', [CartController::class, 'clearCart'])->name('cart.clear');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');


Route::middleware('guest:admin')->group(function () {
    Route::get('/llogin', [LloginController::class, 'showLlogin'])->name('llogin');
    Route::post('/llogin', [LloginController::class, 'llogin']);
});
Route::get('/testlogin', function () {
    return view('testlogin');
});


