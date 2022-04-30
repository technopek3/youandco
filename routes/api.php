<?php

use App\Http\Controllers\api\HolydaysController;
use App\Http\Controllers\ProControllers\api\ExperianceController;
use App\Http\Controllers\ProControllers\api\HolidaysController;
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
Route::apiResource('experiance',ExperianceController::class)->middleware('auth:sanctum');
Route::apiResource('holiday',HolidaysController::class)->middleware('auth:sanctum');


