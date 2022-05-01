<?php

use App\Http\Controllers\ProControllers\api\ExperianceController;
use App\Http\Controllers\ProControllers\api\HolidaysController;
use Illuminate\Support\Facades\Route;



Route::apiResource('experiance',ExperianceController::class);
Route::apiResource('holiday',HolidaysController::class);


