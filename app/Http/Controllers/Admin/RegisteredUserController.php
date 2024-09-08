<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegisteredUser;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function updateStatus(Request $request, RegisteredUser $registeredUser)
    {
        $request->validate([
            'is_active' => 'required|in:0,1', // Ensure is_active is either 0 or 1
            'remarks' => 'nullable|string|max:255', // Validate remarks (optional)
        ]);

        $registeredUser->update([
            'is_active' => $request->is_active,  // Store 1 for Verify, 0 for Reject
            'remarks' => $request->remarks,      // Store remarks
        ]);

        Alert::success('Account verification status has been updated successfully.');

        return back();
    }

}
