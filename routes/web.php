<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoberturaController;
use App\Http\Controllers\TrackingServiceController;
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
Route::resource('/sure', TrackingServiceController::class)->middleware("auth")->only('index', "edit", "update");
Route::get("/login", [AuthController::class, "index"]);
Route::post("/login", [AuthController::class, "login"])->name("login");
Route::post("/logout", [AuthController::class, "logout"])->name("logout");
Route::resource("/user", AdminController::class)->middleware("auth")->only("index", "edit", "update", "show");
Route::resource("/cobertura", CoberturaController::class)->middleware("auth")->only("index", "edit", "update", "create","store");
Route::get('cobertura/pdf/{cobertura}', [CoberturaController::class ,"pdf"])->name("cobertura.pdf");
Route::get('cobertura/email/{cobertura}', [CoberturaController::class ,"email"])->name("cobertura.email");
Route::post('cobertura/send/{cobertura}', [CoberturaController::class ,"send"])->name("cobertura.send");