<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisteredUser\Auth\LoginRequest;
use App\Http\Requests\RegisteredUser\StoreRegisteredUserRequest;
use App\Http\Requests\RegisteredUser\UpdateRegisteredUserRequest;
use App\Models\RegisteredUser;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

class AuthRegisteredUserController extends Controller
{

    public function registerPage()
    {
        return view('frontend.user.register');
    }

    public function register(StoreRegisteredUserRequest $request)
{
    $registeredUser = RegisteredUser::create($request->validated());
    event(new Registered($registeredUser));
    Auth::guard('registered-user')->login($registeredUser);
    return redirect()->route('user.timeline');
}



    public function login(LoginRequest $request)
    {
        $request->authenticate();

        return redirect()->intended(route('user.timeline', absolute: false));

    }

    public function edit(RegisteredUser $registeredUser)
    {
        //
    }


    public function update(UpdateRegisteredUserRequest $request, RegisteredUser $registeredUser)
    {
        //
    }


    public function destroy(RegisteredUser $registeredUser)
    {
        //
    }
}
