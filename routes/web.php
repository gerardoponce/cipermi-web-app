<?php

use App\Http\Controllers\Guest\HomeController;

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

Route::namespace('Guest')->group(function () {

    Route::get('/', [HomeController::class, 'getHome'])->name('inicio');

    Route::get('/servicios', [HomeController::class, 'getServicios'])->name('servicios');

    Route::get('/productos', [HomeController::class, 'getProductos'])->name('productos');

    Route::get('/locales', [HomeController::class, 'getLocales'])->name('locales');

    Route::get('/nosotros', [HomeController::class, 'getNosotros'])->name('nosotros');
    
});

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin');

require __DIR__.'/auth.php';
