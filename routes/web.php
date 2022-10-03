<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/home',[HomeController::class, 'home']);
// Route::get('/signin', [HomeController::class,'check']);
// Route::post('/signin', [HomeController::class,'checkUser']);
// Route::get('/register',[HomeController::class, 'register']);
Route::get('/shopping',[HomeController::class, 'shopping'])->middleware('auth');


/**　↓Laravel Breeze↓ Login & Register & Logout*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
