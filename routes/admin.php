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

use App\Http\Controllers\Admin\AdminController as AdminController;

Route::get('/admin/subjects', [AdminController::class, 'subjects'])->name('subjects');
Route::post('/admin/add/subjects', [AdminController::class, 'addSubjects'])->name('addSubjects');
Route::post('/admin/edit/subjects', [AdminController::class, 'editSubjects'])->name('editSubjects');
Route::post('/admin/delete/subjects', [AdminController::class, 'deleteSubjects'])->name('deleteSubjects');
