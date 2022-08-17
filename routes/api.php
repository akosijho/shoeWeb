<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
// use App\Http\Controllers\SocialLoginController;
// use App\Http\Controllers\WishlistController;
// use App\Http\Controllers\CartController;
use App\Http\Controllers\JoinusController;
use App\Http\Controllers\SignInController;



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
Route::post('/addproduct', [ProductsController::class,'saves']);

// display products
Route::get('/products', [ProductsController::class,'index']);
Route::get('/wishlist', [WishlistController::class,'wishlist']);

Route::get('/products/category', [ProductsController::class,'category']);

// search products
Route::post('/searchproducts', [ProductsController::class,'searchByid']);

// search by category
Route::get('/products/category/{category}', [ProductsController::class,'searchByCategory']);

// update products
Route::put('/products/{id}', [ProductsController::class,'update']);

// delete products
Route::delete('/products/{id}', [ProductsController::class,'delete']);



//Authentication
Route::post('/auth/register',[AuthController::class,'createUser']);
Route::post('/auth/login',[AuthController::class,'loginUser']);



//Socialite Google - web
Route::get('/auth/google/redirect', [SocialiteController::class, 'googleredirect']);
Route::get('/auth/google/callback', [SocialiteController::class, 'googlecallback']);





//Social login - mobile
Route::post('social/login', [SocialLoginController::class, 'socialLogin']);

// Route::post('/category', [WishlistController::class, 'addwislist']);

Route::get('/wishlist/{user_id}', [WishlistController::class, 'mywishlist']);
Route::post('/addwishlist',[WishlistController::class,'addwishlist']);


Route::post('/sampleimage',[ProductsController::class,'sampleimage']);



// add to cart
Route::get('/cart/{user_id}', [CartController::class, 'mycart']);
Route::post('/addtocart',[CartController::class,'addToCart']);
Route::post('/addquantity/{product_name}',[CartController::class,'addquantity']);
Route::post('/subtractquantity/{product_name}',[CartController::class,'subtractquantity']);



Route::get('/samplejoin',[WishlistController::class,'jointable']);



//Sign In - Signin.vue
// Route::resource('joinus','JoinusController');

Route::post('/joinus', [JoinusController::class,'save']);
Route::post('/signin', [SigninController::class,'save']);

