<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ---------- Public site ----------
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/products', [SiteController::class, 'products'])->name('products');
Route::get('/products/{category}', [SiteController::class, 'category'])->name('products.category');
Route::get('/product/{product}', [SiteController::class, 'product'])->name('products.show');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'sendMessage'])->name('contact.send');

// Extra template pages kept from the original site
Route::view('/services', 'pages.services')->name('services');
Route::view('/team', 'pages.team')->name('team');

// ---------- Admin panel ----------
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [Admin\AuthController::class, 'showLogin'])->name('login');
        Route::post('login', [Admin\AuthController::class, 'login'])->name('login.post');
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [Admin\AuthController::class, 'logout'])->name('logout');
        Route::get('/', [Admin\DashboardController::class, 'index'])->name('dashboard');

        Route::resource('categories', Admin\CategoryController::class)->except('show');
        Route::resource('products', Admin\ProductController::class)->except('show');

        Route::get('settings', [Admin\SettingController::class, 'edit'])->name('settings.edit');
        Route::put('settings', [Admin\SettingController::class, 'update'])->name('settings.update');

        Route::get('meta-tags', [Admin\MetaController::class, 'edit'])->name('meta.edit');
        Route::put('meta-tags', [Admin\MetaController::class, 'update'])->name('meta.update');

        Route::get('messages', [Admin\MessageController::class, 'index'])->name('messages.index');
        Route::get('messages/{message}', [Admin\MessageController::class, 'show'])->name('messages.show');
        Route::delete('messages/{message}', [Admin\MessageController::class, 'destroy'])->name('messages.destroy');
    });
});
