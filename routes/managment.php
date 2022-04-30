<?php

use App\Http\Controllers\managementControllers\ProfileController;
use App\Http\Controllers\managementControllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('management.dashboard'); })->name('management.dashboard');

#profile
Route::get('/profile',[ProfileController::class,'edit_profile'])->name('profile.edit');
Route::put('/profile/update',[ProfileController::class,'update_profile'])->name('profile.update');
Route::post('/profile/update/password',[ProfileController::class,'update_password'])->name('profile.updatepassword');
Route::post('/profile/update/email',[ProfileController::class,'update_email'])->name('profile.update_email');

#settings
Route::get('/Parametres',[SettingsController::class,'edit'])->name('settings.edit');

