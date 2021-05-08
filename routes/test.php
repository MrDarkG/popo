<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SvgController as SvgController;


Route::get('/test',[SvgController::class, 'index']);