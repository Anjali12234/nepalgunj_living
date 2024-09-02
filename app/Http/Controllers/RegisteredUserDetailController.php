<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisteredUser\RegisteredUserDetail\StoreRegisteredUserDetailRequest;
use App\Models\RegisteredUser;
use App\Models\RegisteredUserDetail;
use Illuminate\Support\Facades\Auth;

class RegisteredUserDetailController extends Controller
{

    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();
        return view('frontend.user.dashboard.dashboard',compact('registeredUser'));
    }


    public function store(StoreRegisteredUserDetailRequest $request)
    {
        $registeredUser = Auth::guard('registered-user')->user()->load('registeredUserDetail');
        if ($registeredUser) {
            if ($request->hasFile('citizenship_image_front') && $registeredUser?->registeredUserDetail?->citizenship_image_front) {
                $this->deleteFile($registeredUser?->registeredUserDetail?->citizenship_image_front);
            }
            if ($request->hasFile('citizenship_image_back') && $registeredUser?->registeredUserDetail?->citizenship_image_back) {
                $this->deleteFile($registeredUser?->registeredUserDetail?->citizenship_image_back);
            }
            if ($request->hasFile('cover_image') && $registeredUser?->registeredUserDetail?->cover_image) {
                $this->deleteFile($registeredUser?->registeredUserDetail?->cover_image);
            }
            if ($request->hasFile('image') && $registeredUser?->registeredUserDetail?->image) {
                $this->deleteFile($registeredUser?->registeredUserDetail?->image);
            }
            $registeredUserDetail = registeredUserDetail::updateOrCreate(
                ['registered_user_id' => $registeredUser->id],
                $request->validated()
            );
            $registeredUserUpdatedData = [
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'phone_no' => $request->input('phone_no'),
                'gender' => $request->input('gender'),
                'd_o_b' => $request->input('d_o_b'),

            ];

            $registeredUser->update($registeredUserUpdatedData);

            return back();
        }
    }

    public function destroyCitizenshipImageFront(RegisteredUserDetail $registeredUserDetail)
    {
        if ($registeredUserDetail->hasFile('citizenship_image_front') ) {
            $this->deleteFile($registeredUserDetail?->citizenship_image_front);
        }
        return back();

    }
    public function destroyCitizenshipImageBack(RegisteredUserDetail $registeredUserDetail)
    {

        if ($registeredUserDetail->hasFile('citizenship_image_back') ) {
            $this->deleteFile($registeredUserDetail?->citizenship_image_back);
        }
        return back();

    }
    public function destroyCoverImage(RegisteredUserDetail $registeredUserDetail)
    {

        if ($registeredUserDetail->hasFile('cover_image')) {
            $this->deleteFile($registeredUserDetail?->cover_image);
        }
        return back();

    }
    public function destroyImage(RegisteredUser $registeredUser, RegisteredUserDetail $registeredUserDetail)
    {
        if ( $registeredUser?->registeredUserDetail?->image) {
            $this->deleteFile($registeredUser?->registeredUserDetail?->image);
        }
        return back();
    }
}
