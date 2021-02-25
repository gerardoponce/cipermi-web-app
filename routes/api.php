<?php

use App\Http\Controllers\Admin\Api\ProductController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Producto')->group(function () {

    Route::get('/productos', [ProductController::class, 'index']);

    Route::get('/productos/{product:codigo}', [ProductController::class, 'show']);

    Route::post('/productos', [ProductController::class, 'store']);

    Route::put('/productos/{product:id}', [ProductController::class, 'update']);

    Route::delete('/productos/{product:codigo}', [ProductController::class, 'destroy']);

});

Route::fallback(function(){
    return response()->json([
        'mensaje' => 'Ruta no encontrada. Si persiste, contactarse con su proveedor.'], 404);
});