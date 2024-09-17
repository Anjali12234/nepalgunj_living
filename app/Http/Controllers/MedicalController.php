<?php

namespace App\Http\Controllers;

use App\Http\Requests\Medical\StoreMedicalRequest;
use App\Http\Requests\Medical\UpdateMedicalRequest;
use App\Models\Category;
use App\Models\Medical;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MedicalController extends Controller
{
    public function create(SubCategory $subCategory)
    {
        return view('frontend.user.medicalList.create',compact('subCategory'));
    }

    public function store(StoreMedicalRequest $request, SubCategory $subCategory)
    {

       $medicalList= Medical::create(
            $request->validated() + [
                'sub_category_id' => $subCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
                'type' => "medical",
            ]
        );
        foreach ($request->validated(['files']) as $file) {
            $medicalList->files()->create([
                'file_name' => $file->getClientOriginalName(),
                'file' => $file->store('medicalLists/' . Str::slug($request->input('medical_name'), '_'), 'public'),
                'size' => $file->getSize(),
                'extension' => $file->getClientOriginalExtension()
            ]);
        }
        alert("form submitted");
        return back();
    }

    // public function index()
    // {
    //     $registeredUser = Auth::guard('registered-user')->user();

    //     $categories = Category::with(['subCategories.medicals' => function ($query) use ($registeredUser) {
    //         $query->where('registered_user_id', $registeredUser->id);
    //     }])->get();

    //     return view('frontend.user.medicalList.index', compact('categories'));
    // }

    public function edit(SubCategory $subCategory, Medical $medicalList)
    {
        return view('frontend.user.medicalList.edit', compact('subCategory', 'medicalList'));
    }

    public function update(UpdateMedicalRequest $request, Medical $medicalList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $medicalList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('medicalLists/' . Str::slug($request->input('medical_name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $medicalList->update($request->validated());

        alert("form updated");

        return back();
    }


    public function destroy(SubCategory $subCategory, Medical $medicalList)
    {
        foreach ($medicalList->files as $file) {

            $this->deleteFile($file->file);
        }
        $medicalList->delete();
        alert('Medical deleted successfully');
        return back();
    }
}
