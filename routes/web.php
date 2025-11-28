<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TipoProductoController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('productos', ProductController::class);

    Route::resource('tipos', TipoProductoController::class)->names([
        'index'   => 'tipos.index',
        'create'  => 'tipos.create',
        'store'   => 'tipos.store',
        'show'    => 'tipos.show',
        'edit'    => 'tipos.edit',
        'update'  => 'tipos.update',
        'destroy' => 'tipos.destroy',
    ]);
});

require __DIR__.'/auth.php';
