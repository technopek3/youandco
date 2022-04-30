<?php

namespace App\Http\Controllers\managementControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit(){

        return view('management.settings.index');
        
    }
}
