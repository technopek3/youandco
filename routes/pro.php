<?php

use App\Http\Controllers\ProControllers\ProfileController;
use App\Http\Controllers\ProControllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('pro.dashboard'); })->name('dashboard');

Route::get('/login', function () {return 'pro user login page here'; })->name('login');

#profile
Route::get('/profile',[ProfileController::class,'editProfile'])->name('profile.edit');
Route::put('/profile/update',[ProfileController::class,'updateProfile'])->name('profile.update');
Route::post('/profile/update/password',[ProfileController::class,'updatePassword'])->name('profile.updatepassword');
Route::post('/profile/update/email',[ProfileController::class,'updateEmail'])->name('profile.update_email');

#settings
Route::get('/parametres',[SettingsController::class,'edit'])->name('settings.edit');


