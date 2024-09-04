<?php

namespace App\Http\Controllers;

use App\Models\PropertyList;
use App\Http\Requests\StorePropertyListRequest;
use App\Http\Requests\UpdatePropertyListRequest;
use App\Models\SubCategory;

class PropertyListController extends Controller
{

    public function create(SubCategory $subCategory)
    {
        return view('frontend.user.propertyList.create',compact('subCategory'));
    }


    public function store(StorePropertyListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyList $propertyList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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
