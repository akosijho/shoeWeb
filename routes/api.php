<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// add products
Route::post('/addproduct', [ProductsController::class,'save']);

// display products
Route::get('/products', [ProductsController::class,'index']);

// search products
Route::get('/products/{id}', [ProductsController::class,'searchByid']);

// update products
Route::put('/products/{id}', [ProductsController::class,'update']);

// delete products
Route::delete('/products/{id}', [ProductsController::class,'delete']);



//Authentication
Route::post('/auth/register',[AuthController::class,'createUser']);
Route::post('/auth/login',[AuthController::class,'loginUser']);



//Socialite Google
Route::get('/auth/google/redirect', [SocialiteController::class, 'googleredirect']);
Route::get('/auth/google/callback', [SocialiteController::class, 'googlecallback']);