<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogInLogOutController;

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

Route::get("/", [HomeController::class, "index"])->name("home.index");
Route::get("/signup", [LogInLogOutController::class, "signUp"])->name("signup");
Route::post("/registerUser", [LogInLogOutController::class, "store"])->name("registerUser");
Route::get("/login", [LogInLogOutController::class, "login"])->name("login");
Route::post("/logUser", [LogInLogOutController::class, "logUser"])->name("logUser");
