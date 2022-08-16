<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\JoinusController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\WishlistController;

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
Route::get('/wishlist', [WishlistController::class,'wishlist']);

Route::get('/products/category', [ProductsController::class,'category']);

// search products
Route::get('/products/{id}', [ProductsController::class,'searchByid']);

Route::get('/products/category/{category}', [ProductsController::class,'searchByCategory']);

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


//Sign In - Signin.vue
// Route::resource('joinus','JoinusController');

Route::post('/joinus', [JoinusController::class,'save']);
Route::post('/signin', [SigninController::class,'save']);




// Route::post('/sample',[GoogleSocialite::class,'login']);


Route::post('social/login', [SocialLoginController::class, 'socialLogin']);
