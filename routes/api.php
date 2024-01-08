<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\UploadController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CallbackController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//===================register-logout-login=================
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:sanctum');

//===================Upload Image==========================

Route::post('image/upload', [UploadController::class, 'uploadImage'])
    ->middleware('auth:sanctum');
Route::post('image/upload-multiple', [UploadController::class, 'uploadMultipleImage'])
    ->middleware('auth:sanctum');

//===================order=================================

Route::post('orders', [OrderController::class, 'order'])
    ->middleware('auth:sanctum');

//====================callback=============================
Route::post('midtrans/notification/handling', [CallbackController::class, 'callback']);

//===================product category======================

Route::apiResource('categories', CategoryController::class);
Route::apiResource('product', ProductController::class);
