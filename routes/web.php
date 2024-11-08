<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibaryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
Route::get('/',[HomeController::class,'index']);
Route::get('/',[TeamController::class, 'index']);
Route::get('/',[NewsController::class, 'index']);
Route::get('/',[LibaryController::class, 'index']);
Route::get('/',[PlayerController::class,  'index']);
Route::get('/',[NewsController::class, 'index']);
Route::get('/', function () {
    return view('home');
});
?>