<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

use Illuminate\Support\Facades\Route;


Route::namespace('Admin')->prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('admin');

    Route::namespace('Product')->prefix('/productos')->group(function () {

        Route::get('/', [ProductController::class, 'index'])
            ->middleware('auth')
            ->name('admin.product.index');
    
        Route::post('/', [ProductController::class, 'store'])
            ->middleware('auth')
            ->name('admin.product.store');
    
        Route::get('/{product:codigo}', [ProductController::class, 'show'])
            ->middleware('auth')
            ->name('admin.product.show');
    
        Route::get('/{product:codigo}/edit', [ProductController::class, 'edit'])
            ->middleware('auth')
            ->name('admin.product.edit');
    
        Route::put('/{product:codigo}', [ProductController::class, 'update'])
            ->middleware('auth')
            ->name('admin.product.update');
    
        Route::delete('/{product:codigo}', [ProductController::class, 'destroy'])
            ->middleware('auth')
            ->name('admin.product.destroy');
    
    });

    Route::get('/usuarios', function () {
        return view('admin.user.index');
    })->middleware(['auth'])->name('admin.user.index');

});