<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhatsAppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Auth
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
Route::post('logout',[UserController::class,'logout'])->middleware('auth:sanctum');

// business 
Route::get('business',[BusinessController::class,'show'])->middleware('auth:sanctum');
Route::put('business',[BusinessController::class,'update'])->middleware('auth:sanctum');

// service 
Route::get('service',[ServiceController::class,'create'])->middleware('auth:sanctum');
Route::post('service',[ServiceController::class,'store'])->middleware('auth:sanctum');
Route::get('service/{id}',[ServiceController::class,'edit'])->middleware('auth:sanctum');
Route::put('service/{id}',[ServiceController::class,'update'])->middleware('auth:sanctum');
Route::delete('service/{id}',[ServiceController::class,'delete'])->middleware('auth:sanctum');

// message 
Route::get('message',[MessageController::class,'index'])->middleware('auth:sanctum');
Route::post('message',[MessageController::class,'send'])->middleware('auth:sanctum');

// whatsapp 
Route::post('/webhook/whatsapp',[WhatsAppController::class,'receive']);
// Route::post('/webhook/whatsapp', function () {
//     file_put_contents(storage_path('webhook.txt'), "working");
//     return response()->json(['ok' => true]);
// });