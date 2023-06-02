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

Route::get("/",[App\Http\Controllers\WebController::class,"home"]);

Route::get("/add-student",[App\Http\Controllers\WebController::class,"addStudent"]);

Route::post("/add-student",[App\Http\Controllers\WebController::class,"infoStudent"]);

