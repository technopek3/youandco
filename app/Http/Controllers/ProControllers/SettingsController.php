<?php

namespace App\Http\Controllers\ProControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit(){
        return view('pro.settings.index');
    }
}
