<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyList;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PropertyListController extends Controller
{
    public function index()
    {
        $propertyLists = PropertyList::with('subCategory')->paginate(10);
        return view('admin.propertyList.index', compact('propertyLists'));
    }

    public function updatePropertyListStatus(PropertyList $propertyList)
    {
        $propertyList->update([
            'status' => !$propertyList->status
        ]);
        Alert::success('PropertyList updated successfully');

        return back();
    }
    public function updatePropertyListFeatured(PropertyList $propertyList)
    {
        $propertyList->update([
            'is_featured' => !$propertyList->is_featured
        ]);
        Alert::success('PropertyList updated successfully');

        return back();
    }
}
