<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CDGameController;
use App\Http\Controllers\GameConsoleController;
use App\Http\Controllers\GiftCardController;
use App\Http\Controllers\TrademarkController;
use App\Http\Controllers\VerificationController;
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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/re_register', [AuthController::class, 're_register']);

    Route::post('email/verify_OTP',[VerificationController::class,'verify_OTP']);
    Route::post('email/logout_OTP',[VerificationController::class,'logout_OTP']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'advertise'
], function ($router) {
    Route::get('/', [AdvertisementController::class, 'index']);
    Route::post('/store', [AdvertisementController::class, 'store']);
    Route::get('/detail/{id}', [AdvertisementController::class, 'detail']);
    Route::post('/delete/{id}', [AdvertisementController::class, 'delete']);
    Route::put('/update', [AdvertisementController::class, 'update']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'cd_games'
], function ($router) {
    Route::get('/', [CDGameController::class, 'index']);
    Route::get('/detail/{id}', [CDGameController::class, 'detail']);
    Route::post('/store', [CDGameController::class, 'store']);
    Route::post('/delete/{id}', [CDGameController::class, 'delete']);
    Route::post('/update', [CDGameController::class, 'update']);

});

Route::group([
    'middleware' => 'api',
    'prefix' => 'trademarks'
], function ($router) {
    Route::get('/', [TrademarkController::class, 'index']);
    Route::get('/detail/{id}', [TrademarkController::class, 'detail']);
    Route::post('/store', [TrademarkController::class, 'store']);
    Route::post('/delete/{id}', [TrademarkController::class, 'delete']);
    Route::post('/update', [TrademarkController::class, 'update']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'game_consoles'
], function ($router) {
    Route::get('/', [GameConsoleController::class, 'index']);
    Route::get('/detail/{id}', [GameConsoleController::class, 'detail']);
    Route::post('/store', [GameConsoleController::class, 'store']);
    Route::post('/delete/{id}', [GameConsoleController::class, 'delete']);
    Route::post('/update', [GameConsoleController::class, 'update']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'gift_card'
], function ($router) {
    Route::get('/', [GiftCardController::class, 'index']);
    Route::get('/detail/{id}', [GiftCardController::class, 'detail']);
    Route::post('/store', [GiftCardController::class, 'store']);
    Route::post('/delete/{id}', [GiftCardController::class, 'delete']);
    Route::post('/update', [GiftCardController::class, 'update']);
});


