<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/home',[HomeController::class, 'home']);
Route::get('/shopping',[HomeController::class, 'shopping'])->middleware('auth');
Route::get('/shopping/all',[ProductController::class, 'products'])->middleware('auth');


/**　↓Laravel Breeze↓ Login & Register & Logout*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
