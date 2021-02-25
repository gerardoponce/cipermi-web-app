<?php

use App\Http\Controllers\Guest\HomeController;

use Illuminate\Support\Facades\Route;


Route::namespace('Guest')->group(function () {

    Route::get('/', [HomeController::class, 'getHome'])->name('inicio');

    Route::get('/servicios', [HomeController::class, 'getServicios'])->name('servicios');

    Route::get('/productos', [HomeController::class, 'getProductos'])->name('productos');

    Route::get('/locales', [HomeController::class, 'getLocales'])->name('locales');

    Route::get('/nosotros', [HomeController::class, 'getNosotros'])->name('nosotros');

    Route::get('/contactanos', [HomeController::class, 'getContactanos'])->name('contactanos');

});
