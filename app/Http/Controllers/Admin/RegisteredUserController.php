<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegisteredUser;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function index()
    {
        $registeredUsers = RegisteredUser::paginate(10);
        return view('admin.registeredUser.index',compact('registeredUsers'));
    }
    public function show(RegisteredUser $registeredUser)
    {
        return view('admin.registeredUser.show',compact('registeredUser'));
    }
}
