<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CoberturaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TrackingServiceController;
use App\Http\Controllers\Api\DoctorController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Middleware para proteger las siguientes rutas
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/userProfile', [AuthController::class, 'userProfile']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('users', [AuthController::class, 'allUsers']);


//Cobertura Juridica Routs
//Middleware
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/cobertura/register', [CoberturaController::class, 'register']);
    Route::get('/get/cobertura/{user_id}', [CoberturaController::class, 'cobertura']);
    Route::get('/cobertura/allCobertura', [CoberturaController::class, 'allCobertura']);

    //routs TrackingServices
    Route::get('/get/trackingService/{user_id}', [TrackingServiceController::class, 'trackingServices']);
    Route::post('/update/trackingService/{service}', [TrackingServiceController::class, 'updateTrackingServices']);

    //Doctors 
    Route::get('/cobertura/doctors', [DoctorController::class, 'allDoctors']);
    Route::get('/get/cobertura/doctors/{identification}', [DoctorController::class, 'oneDoctor']);
    Route::post('/cobertura/doctors/addDoctor', [DoctorController::class, 'addDoctor']);
    
    
    //anterior main
    //Route::post('/update/trackingService', [TrackingServiceController::class, 'updateTrackingServices']);
    //Route::get('/get/trackingService/{user_id}', [TrackingServiceController::class, 'trackingServices']);
});