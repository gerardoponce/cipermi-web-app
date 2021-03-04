<?php

use App\Http\Controllers\Admin\ProductController;

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

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin');

Route::get('/admin/productos', [ProductController::class, 'index'])
            ->middleware('auth')
            ->name('admin.product.index');

Route::post('/admin/productos', [ProductController::class, 'store'])
            ->middleware('auth')
            ->name('admin.product.store');

Route::get('/admin/productos/{product:codigo}', [ProductController::class, 'show'])
            ->middleware('auth')
            ->name('admin.product.show');

Route::get('/admin/productos/{product:codigo}/edit', [ProductController::class, 'edit'])
            ->middleware('auth')
            ->name('admin.product.edit');

Route::put('/admin/productos/{product:codigo}', [ProductController::class, 'update'])
            ->middleware('auth')
            ->name('admin.product.update');

Route::delete('/admin/productos/{product:codigo}', [ProductController::class, 'destroy'])
            ->middleware('auth')
            ->name('admin.product.destroy');

require __DIR__.'/auth.php';

require __DIR__.'/guest.php';