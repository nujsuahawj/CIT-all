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
Route::get('/news_products', [App\Http\Controllers\Api\ProductApiController::class,'getNewProduct']);
Route::get('/random_products', [App\Http\Controllers\Api\ProductApiController::class,'getRandomProduct']);
Route::resource('/catalogs', CatalogApiController::class);
Route::resource('/slide', SlideApiController::class);
Route::resource('/order', OrderApiController::class);
Route::resource('/service', ServiceApiController::class);
Route::resource('/customer', App\Http\Controllers\Api\CustomerApiController::class);
Route::get('/other_customer', [App\Http\Controllers\Api\CustomerApiController::class,'index_other']);
Route::resource('/about', App\Http\Controllers\Api\PageApiController::class);
Route::get('/term', [App\Http\Controllers\Api\PageApiController::class,'term']);
Route::resource('/solutions', App\Http\Controllers\Api\SolutionApiController::class);
Route::resource('/news', App\Http\Controllers\Api\NewsApiController::class);

Route::post('/register',[App\Http\Controllers\Api\Auth\AuthApiController::class, 'register']);
Route::post('/login',[App\Http\Controllers\Api\Auth\AuthApiController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/user', [App\Http\Controllers\Api\Auth\AuthApiController::class, 'user']);
    Route::post('/user/update', [App\Http\Controllers\Api\Auth\AuthApiController::class, 'update']);
    Route::post('/logout', [App\Http\Controllers\Api\Auth\AuthApiController::class, 'logout']);
});
