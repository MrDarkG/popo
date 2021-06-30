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


Route::get("/sound/{word}/{filaname}",function($word,$filaname){
    return App\Services\SoundService::getSound($word,$filaname);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(["auth"])->group(function(){

    Route::get("user-area", [App\Http\Controllers\SvgController::class, 'userArea'])->name("user_index");
    Route::get("offers", [App\Http\Controllers\SvgController::class, 'offers'])->name("offers");
    Route::post("/store/kids/data",[App\Http\Controllers\SvgController::class,"storekidsdata"])->name("storekidsdata");
    Route::post("/buy/course",[App\Http\Controllers\SvgController::class,"storecourse"])->name("buycourse");
    Route::post("/answer/question",[App\Http\Controllers\SvgController::class,"StoreAnswer"])->name("answerquestin");
    Route::post("get/my/score",[App\Http\Controllers\QuizController::class,"myscore"])->name("myscore");
});


Route::get("/play/quiz/{id}",[App\Http\Controllers\QuizController::class,"index"])->name("play");


Route::get("/sign-in/google",[App\Http\Controllers\Auth\LoginController::class,"google"]);
Route::get("/sign-in/google/redirect", [App\Http\Controllers\Auth\LoginController::class,"google_redirect"]);

Route::get("/sign-in/facebook",[App\Http\Controllers\Auth\LoginController::class, 'facebook']);
Route::get("/sign-in/facebook/redirect",[App\Http\Controllers\Auth\LoginController::class, 'facebookRedirect']);

Route::post('/change/character/outfit',[App\Http\Controllers\SvgController::class, 'changeCharacterOutfit']);


Route::get("privacy",function(){
    return view("privacy");
});
Route::get("terms",function(){
    return view("terms");
});