<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;

// Login simple (sin roles)
Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// CRUD productos
Route::resource('productos', ProductController::class);

// CRUD tipos de producto
Route::resource('tipos-producto', ProductTypeController::class);
