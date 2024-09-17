<?php

namespace App\Http\Controllers;

use App\Http\Requests\Doctor\StoreDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
    public function create(SubCategory $subCategory)
    {
        return view('frontend.user.doctorList.create',compact('subCategory'));
    }

    public function store(StoreDoctorRequest $request, SubCategory $subCategory)
    {
        Doctor::create(
            $request->validated() + [
                'sub_category_id' => $subCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
                'type' => "doctor",
            ]
        );

        alert("form submitted");
        return back();
    }

    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();

        $categories = Category::with(['subCategories.doctors' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();

        return view('frontend.user.doctorList.index', compact('categories'));
    }

    public function edit(SubCategory $subCategory, Doctor $doctorList)
    {
        return view('frontend.user.doctorList.edit', compact('subCategory', 'doctorList'));
    }

    public function update(UpdateDoctorRequest $request, Doctor $doctorList)
    {
        if ($request->hasFile('image') && $image= $doctorList->getRawOriginal('image')) {

            $this->deleteFile($image);
        }
        $doctorList->update($request->validated());

        alert("form updated");

        return redirect(route('user.doctor/doctorLists'));
    }


    public function destroy(SubCategory $subCategory, Doctor $doctorList)
    {
        $doctorList->delete();
        Alert::success('Doctor deleted successfully');
        return back();
    }
}
