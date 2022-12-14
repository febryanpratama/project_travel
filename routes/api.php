<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('city/{provinces_id}', [ApiController::class, 'city']);

Route::get('district/{regncies_id}', [ApiController::class, 'district']);

Route::get('village/{districts_id}', [ApiController::class, 'village']);

Route::post('getDistance', [ApiController::class, 'getDistance']);

Route::post('calculator', [ApiController::class, 'calculator']);

Route::post('status-transaksi', [ApiController::class, 'statusTransaksi']);
