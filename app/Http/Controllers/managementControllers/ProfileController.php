<?php

namespace App\Http\Controllers\managementControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\profile\ProfileUpdateEmail;
use App\Http\Requests\profile\ProfileUpdatePassword;
use App\Http\Requests\profile\profileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit_profile()
    {
        return view('management.settings.index');
    }

    public function update_profile(profileUpdateRequest $request)
    {
        auth()->user()->update([
            User::FIRST_NAME => $request->first_name,
            User::LAST_NAME => $request->last_name,
            User::PHONE => $request->phone,
        ]);

        if ($request->has('avatar')) {
            Auth::user()->addMedia($request->avatar)->toMediaCollection('avatar');
        }

        return redirect()->back()->with('success', 'Vous infornation ont été mise a joure');
    }

    public function update_password(ProfileUpdatePassword $request)
    {
        Auth::user()->update([
            User::PASSWORD => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Vous infornation ont été mise a joure');
    }

    public function update_email(ProfileUpdateEmail $request)
    {
        return 'mise a jours des email will take place when i add emails';
    }
}
