<?php

namespace App\Http\Controllers;

use App\Http\Requests\Pharmacy\StorePharmacyRequest;
use App\Http\Requests\Pharmacy\UpdatePharmacyRequest;
use App\Models\Pharmacy;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PharmacyController extends Controller
{
    public function create(SubCategory $subCategory)
    {
        return view('frontend.user.pharmacyList.create',compact('subCategory'));
    }

    public function store(StorePharmacyRequest $request, SubCategory $subCategory)
    {

       $pharmacyList= Pharmacy::create(
            $request->validated() + [
                'sub_category_id' => $subCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
                'type' => "pharmacy",
            ]
        );
        foreach ($request->validated(['files']) as $file) {
            $pharmacyList->files()->create([
                'file_name' => $file->getClientOriginalName(),
                'file' => $file->store('pharmacyLists/' . Str::slug($request->input('pharmacy_name'), '_'), 'public'),
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

    //     $categories = Category::with(['subCategories.Pharmacys' => function ($query) use ($registeredUser) {
    //         $query->where('registered_user_id', $registeredUser->id);
    //     }])->get();

    //     return view('frontend.user.pharmacyList.index', compact('categories'));
    // }

    public function edit(SubCategory $subCategory, Pharmacy $pharmacyList)
    {
        return view('frontend.user.pharmacyList.edit', compact('subCategory', 'pharmacyList'));
    }

    public function update(UpdatePharmacyRequest $request, Pharmacy $pharmacyList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $pharmacyList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('pharmacyLists/' . Str::slug($request->input('pharmacy_name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $pharmacyList->update($request->validated());

        alert("form updated");

        return back();
    }


    public function destroy(SubCategory $subCategory, Pharmacy $pharmacyList)
    {
        foreach ($pharmacyList->files as $file) {

            $this->deleteFile($file->file);
        }
        $pharmacyList->delete();
        alert('Pharmacy deleted successfully');
        return back();
    }
}
