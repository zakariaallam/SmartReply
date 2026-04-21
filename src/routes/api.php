<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\TeamController;
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
Route::post('ownerRegister',[UserController::class,'ownerRegister']);
Route::post('login',[UserController::class,'login']);
Route::post('logout',[UserController::class,'logout'])->middleware('auth:api');
// User 
Route::get('user',[UserController::class,'getUser'])->middleware('auth:api');

// business 
Route::get('business',[BusinessController::class,'getAllBuinesses']);
Route::get('business/{id}',[BusinessController::class,'getBuinesses']);
Route::put('business',[BusinessController::class,'update'])->middleware('auth:api');
Route::patch('business',[BusinessController::class,'updateWorkHours']);
Route::post('upload/image',[BusinessController::class,'uploadImage'])->middleware('auth:api');

// details 
Route::get('detail/{id}',[BusinessController::class,'detailRocommand']);

// service 
Route::get('service',[ServiceController::class,'index'])->middleware('auth:api');
Route::post('service',[ServiceController::class,'store'])->middleware('auth:api');
Route::get('service/{id}',[ServiceController::class,'getService']);
Route::put('service/{id}',[ServiceController::class,'update'])->middleware('auth:api');
Route::delete('service/{id}',[ServiceController::class,'delete'])->middleware('auth:api');

// Team 
Route::post('team',[TeamController::class,'store'])->middleware('auth:api');
Route::get('team',[TeamController::class,'getAllMembers'])->middleware('auth:api');
Route::get('team/{id}',[TeamController::class,'getAllMembersdetail']);

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