<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('shop', [ShopsController::class,'show']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
