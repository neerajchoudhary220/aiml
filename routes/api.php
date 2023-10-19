<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::controller(AuthController::class)->prefix('user')->group(function () {
    Route::post('/signup', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:api')->group(function () {
    Route::controller(ProfileController::class)->prefix('user/profile')->group(function () {
        Route::get('/', 'profile');
        Route::get('/test','test');
    });
    Route::get('user/logout', [AuthController::class, 'logout']);
});
