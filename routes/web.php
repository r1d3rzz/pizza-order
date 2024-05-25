<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::get("/login", "login")->name("login")->middleware("guest");
    Route::post("/login", "post_login")->name("post_login")->middleware("guest");
    Route::get("/register", "register")->name("register")->middleware("guest");
    Route::post("/register", "post_register")->name("post_register")->middleware("guest");
    Route::post("/logout", "logout")->name("logout")->middleware("auth");
});

Route::middleware("auth")->get('/', function () {
    return view('welcome');
})->name("home");
