<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyList\StorePropertyListRequest;
use App\Http\Requests\PropertyList\UpdatePropertyListRequest;
use App\Models\PropertyList;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;

class PropertyListController extends Controller
{

    public function create(SubCategory $subCategory)
    {
        return view('frontend.user.propertyList.create',compact('subCategory'));
    }


    public function store(StorePropertyListRequest $request, SubCategory $subCategory)
    {
        PropertyList::create(
            $request->validated() + [
                'sub_category_id' => $subCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
            ]
        );
        alert("form submitted");
        return back();
    }

    public function index(SubCategory $subCategory)
    {
        return view('frontend.user.propertyList.index');
    }



    public function edit(PropertyList $propertyList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyListRequest $request, PropertyList $propertyList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyList $propertyList)
    {
        //
    }
}
