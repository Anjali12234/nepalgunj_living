<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.category.index',compact('categories'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.category.create',compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());
        Alert::success('Category added successfully');
        return back();
    }

    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.category.edit',compact('categories','category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if ($request->hasFile('image') && $image= $category->getRawOriginal('image')) {

            $this->deleteFile($image);
        }
        $category->update($request->validated());
        Alert::success('Category updated successfully');
        return redirect(route('admin.category.index'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        Alert::success('Category deleted successfully');
        return back();
    }

}
