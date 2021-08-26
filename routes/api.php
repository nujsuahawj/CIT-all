<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\CatalogApiController;
use App\Http\Controllers\Api\SlideApiController;
use App\Http\Controllers\Api\OrderApiController;
use App\Http\Controllers\Api\ServiceApiController;

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

Route::resource('/products', ProductApiController::class);
Route::resource('/catalogs', CatalogApiController::class);
Route::resource('/slide', SlideApiController::class);
Route::resource('/order', OrderApiController::class);
Route::resource('/service', ServiceApiController::class);
Route::resource('/customer', App\Http\Controllers\Api\CustomerApiController::class);
Route::get('/other_customer', [App\Http\Controllers\Api\CustomerApiController::class,'index_other']);
Route::resource('/about', App\Http\Controllers\Api\PageApiController::class);
Route::get('/term', [App\Http\Controllers\Api\PageApiController::class,'term']);