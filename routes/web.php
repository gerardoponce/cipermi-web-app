<?php

use App\Http\Controllers\Admin\Api\ProductController;

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

require __DIR__.'/auth.php';

require __DIR__.'/guest.php';