<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\PageController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('shop', [ShopsController::class,'show'])->name('shop.home');
Route::get('buy', [AddController::class,'addA1'])->name('add.home');
Route::post('buy', [AddController::class,'saveA1'])->name('save.home');
Route::get('addList', [AddController::class,'addList'])->name('add.list');
// Route::get('admin', [AddController::class,'addList'])->name('add.list');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); //內建登入畫面


// 管理員
Route::get('/admin', 'App\Http\Controllers\PageController@index')->middleware('App\Http\Middleware\adminAuth');

Route::post('/admin.login', 'App\Http\Controllers\AdminloginController@login');

Route::get('/admin.login', 'App\Http\Controllers\AdminloginController@showLoginPage');

Route::get('/admin.logout', 'App\Http\Controllers\AdminloginController@logout');

Route::get('/admin', function () {
    return view('adminlogin');
})->name('adminlogin.home');
