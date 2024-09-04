<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategory\StoreSubCategoryRequest;
use App\Http\Requests\Admin\SubCategory\UpdateSubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use RealRashid\SweetAlert\Facades\Alert;

class SubCategoryController extends Controller
{

    public function index()
    {
        $subCategories = SubCategory::paginate(10);
        return view('admin.subCategory.index',compact('subCategories'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.subCategory.create',compact('categories'));
    }

    public function store(StoreSubCategoryRequest $request)
    {
        SubCategory::create($request->validated());
        Alert::success('Sub Category added successfully');
        return back();
    }

    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.subCategory.edit',compact('categories','subCategory'));
    }

    public function update(UpdateSubCategoryRequest $request, SubCategory $subCategory)
    {
        if ($request->hasFile('image') && $image= $subCategory->getRawOriginal('image')) {

            $this->deleteFile($image);
        }
        $subCategory->update($request->validated());
        Alert::success('Sub Category updated successfully');
        return redirect(route('admin.subCategory.index'));
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        Alert::success('Sub Category deleted successfully');
        return back();
    }
}
