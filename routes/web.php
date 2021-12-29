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

Route::get('/admin/login',[\App\Http\Controllers\Admin\ManageController::class,'login'])->name('loginget');

Route::post('admin/submit',[\App\Http\Controllers\Admin\ManageController::class,'submit']);

Route::get('/admin/index',[\App\Http\Controllers\Admin\ManageController::class,'index']);


Route::get('/admin/welcome',[\App\Http\Controllers\Admin\ManageController::class,'welcome']);

