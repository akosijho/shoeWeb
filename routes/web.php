<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SigninController;


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
Route::get('/', function () {
    return view('nike');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('layout.home.about');
});

Route::get('/home', function () {
    return view('index');
});


Route::post('/contactus', [ArticleController::class, 'save']);

Route::get('/rs', function () {
    return view('rs');
});
