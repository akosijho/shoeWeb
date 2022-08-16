<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WishlistController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/{any}', function () {
//     return view('nike');
// })->where('any','.*');
// Route::get('/contactus', function () {
//     return view('contactus');
// });

Route::post('/contactus', [ArticleController::class, 'save']);

Route::get('/wishlist', [WishlistController::class, 'index']);


Route::post('/addwishlist', [WishlistController::class, 'addwishlist'])->name('wishlist.save');

Route::get('/mywishlist/{request}', [WishlistController::class, 'mywishlist']);


