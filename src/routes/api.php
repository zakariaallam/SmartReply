<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhatsAppController;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Auth
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
Route::post('logout',[UserController::class,'logout'])->middleware('auth:api');
// User 
Route::get('user',[UserController::class,'getUser'])->middleware('auth:api');

// business 
Route::get('business',[BusinessController::class,'show'])->middleware('auth:api');
Route::put('business',[BusinessController::class,'update'])->middleware('auth:api');

// service 
Route::get('service',[ServiceController::class,'create'])->middleware('auth:api');
Route::post('service',[ServiceController::class,'store'])->middleware('auth:api');
Route::get('service/{id}',[ServiceController::class,'edit'])->middleware('auth:api');
Route::put('service/{id}',[ServiceController::class,'update'])->middleware('auth:api');
Route::delete('service/{id}',[ServiceController::class,'delete'])->middleware('auth:api');

// message 
Route::get('message',[MessageController::class,'index'])->middleware('auth:api');
Route::post('message',[MessageController::class,'send'])->middleware('auth:api');

// whatsapp 
Route::post('/webhook/whatsapp',[WhatsAppController::class,'receive']);

// Google OAuth 
Route::get('/auth/redirect/{provide}',[SocialiteController::class,'redirect']);
Route::get('/auth/callback/{provider}',[SocialiteController::class,'callback']);

// Appointment
Route::get('/appointment',[AppointmentController::class,'index']);