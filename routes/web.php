<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/home',[HomeController::class, 'home']);
Route::get('/shopping',[HomeController::class, 'shopping'])->middleware('auth');
Route::get('/shopping/all',[ProductController::class, 'products'])->middleware('auth');
Route::get('/shopping/details/{id}/', [ProductController::class, 'details'])->name('products.list')->middleware('auth');; // ->name('products.list') 追記shopping cart用に



// Laravel Shopping cart
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



/** ↓Laravel Breeze↓ Login & Register & Logout*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
// require __DIR__.'/farmer.php'; //farmer認証(マルチ認証)
Route::prefix('farmer')->name('farmer.')->group(function(){
    require __DIR__.'/farmer.php';
});