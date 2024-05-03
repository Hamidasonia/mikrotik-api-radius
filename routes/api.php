<?php

use App\Http\Controllers\API\ChatController;
use App\Http\Controllers\API\DoctorController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\ReservationController;
use App\Http\Controllers\API\ServiceCategoryController;
use Illuminate\Http\Request;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\Client;
use App\Http\Controllers\MikrotikController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('user', [UserController::class, 'fetch']);
//     Route::post('user', [UserController::class, 'updateProfile']);
//     Route::post('update-image', [UserController::class, 'updatePhotoProfile']);
//     Route::post('logout', [UserController::class, 'logout']);

//     Route::post('reservation', [ReservationController::class, 'create']);
//     Route::get('reservation', [ReservationController::class, 'get']);

//     Route::get('/chat', [ChatController::class, 'room']);
//     Route::post('/chat', [ChatController::class, 'create']);
//     Route::get('/chat/{id}', [ChatController::class, 'chat']);
//     Route::post('/chat/{id}', [ChatController::class, 'send']);
// });

// Route::post('register', [UserController::class, 'register']);
// Route::post('login', [UserController::class, 'login']);

// Route::get('categories', [ServiceCategoryController::class, 'all']);
// Route::get('doctors', [DoctorController::class, 'all']);
Route::get('mikrotik', [MikrotikController::class]);

Route::get('/', [MikrotikController::class, 'index']);
