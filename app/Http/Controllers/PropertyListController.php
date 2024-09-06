<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyList\StorePropertyListRequest;
use App\Http\Requests\PropertyList\UpdatePropertyListRequest;
use App\Models\Category;
use App\Models\PropertyList;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PropertyListController extends Controller
{

    public function create(SubCategory $subCategory)
    {
        return view('frontend.user.propertyList.create', compact('subCategory'));
    }

    public function store(StorePropertyListRequest $request, SubCategory $subCategory)
    {
        $propertyList = PropertyList::create(
            $request->validated() + [
                'sub_category_id' => $subCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
            ]
        );
        foreach ($request->validated(['files']) as $file) {
            $propertyList->files()->create([
                'file_name' => $file->getClientOriginalName(),
                'file' => $file->store('propertyLists/' . Str::slug($request->input('title'), '_'), 'public'),
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

        $categories = Category::with(['subCategories.propertyLists' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();

        return view('frontend.user.propertyList.index', compact('categories'));
    }

    public function edit(SubCategory $subCategory, PropertyList $propertyList)
    {
        return view('frontend.user.propertyList.edit', compact('subCategory', 'propertyList'));
    }

    public function update(UpdatePropertyListRequest $request, PropertyList $propertyList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $propertyList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('propertyLists/' . Str::slug($request->input('title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $propertyList->update($request->validated());
        return redirect(route('user.property/propertyLists'));
    }


    public function destroy(PropertyList $propertyList)
    {
        foreach ($propertyList->files as $file) {

            $this->deleteFile($file->file);
        }
        $propertyList->delete();
        return back();
    }
}
