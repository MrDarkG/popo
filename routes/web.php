<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/r",function(){
    return view("puppy");
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("user-area", [App\Http\Controllers\SvgController::class, 'userArea']);
Route::get("offers", function(){
    return view("userdashboard.offers");
});


Route::get("/play/quiz/{id}",[App\Http\Controllers\QuizController::class,"index"]);


Route::get("/sign-in/google",[App\Http\Controllers\Auth\LoginController::class,"google"]);
Route::get("/sign-in/google/redirect", [App\Http\Controllers\Auth\LoginController::class,"google_redirect"]);

Route::get("/sign-in/facebook",[App\Http\Controllers\Auth\LoginController::class, 'facebook']);
Route::get("/sign-in/facebook/redirect",[App\Http\Controllers\Auth\LoginController::class, 'facebookRedirect']);