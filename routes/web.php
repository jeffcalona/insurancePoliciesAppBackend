<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoberturaController;

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

Route::view("/", "welcome");
Route::get("/login", [AuthController::class, "index"]);
Route::post("/login", [AuthController::class, "login"])->name("login");
Route::post("/logout", [AuthController::class, "logout"])->name("logout");
Route::resource("/user", AdminController::class)->middleware("auth")->only("index", "edit", "update");
Route::resource("/cobertura", CoberturaController::class)->middleware("auth")->only("index", "edit", "update", "create","store");
Route::get('cobertura/pdf', [CoberturaController::class ,"pdf"])->name("cobertura.pdf");