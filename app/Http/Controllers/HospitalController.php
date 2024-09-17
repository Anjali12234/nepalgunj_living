<?php

namespace App\Http\Controllers;

use App\Http\Requests\Hospital\StoreHospitalRequest;
use App\Http\Requests\Hospital\UpdateHospitalRequest;
use App\Models\Category;
use App\Models\Hospital;
use App\Models\SubCategory;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller
{
    public function create(SubCategory $subCategory)
    {
        return view('frontend.user.hospitalList.create',compact('subCategory'));
    }

    public function store(StoreHospitalRequest $request, SubCategory $subCategory)
    {

       $hospitalList= Hospital::create(
            $request->validated() + [
                'sub_category_id' => $subCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
                'type' => "hospital",
            ]
        );
        foreach ($request->validated(['files']) as $file) {
            $hospitalList->files()->create([
                'file_name' => $file->getClientOriginalName(),
                'file' => $file->store('hospitalLists/' . Str::slug($request->input('hospital_name'), '_'), 'public'),
                'size' => $file->getSize(),
                'extension' => $file->getClientOriginalExtension()
            ]);
        }
        alert("form submitted");
        return back();
    }

    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();

        $categories = Category::with(['subCategories.hospitals' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();

        return view('frontend.user.hospitalList.index', compact('categories'));
    }

    public function edit(SubCategory $subCategory, Hospital $hospitalList)
    {
        return view('frontend.user.hospitalList.edit', compact('subCategory', 'hospitalList'));
    }

    public function update(UpdateHospitalRequest $request, Hospital $hospitalList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $hospitalList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('hospitalLists/' . Str::slug($request->input('title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $hospitalList->update($request->validated());

        alert("form updated");

        return back();
    }


    public function destroy(SubCategory $subCategory, Hospital $hospitalList)
    {
        foreach ($hospitalList->files as $file) {

            $this->deleteFile($file->file);
        }
        $hospitalList->delete();
        alert('Doctor deleted successfully');
        return back();
    }
}
