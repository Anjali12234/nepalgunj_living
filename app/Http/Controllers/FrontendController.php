<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PropertyList;
use App\Models\Setting;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function properties(Request $request, $subCategorySlug = null)
    {
        $search = request('search');
        $categoryType = $request->input('category_type', \App\Enums\CategoryTypeEnum::PROPERTIES);
        $isRent = $request->input('is_rent'); // Added for rent or sale filtering
        $subCategories = SubCategory::with('propertyLists')
            ->where('category_type', $categoryType)
            ->paginate(15);

        $properties = PropertyList::with('subCategory', 'registeredUser')
            ->when($search, function ($query, $search) {
                $query->where('reference_no', 'like', "%{$search}%")
                    ->orWhere('title', 'like', "%{$search}%")
                    ->orWhere('rate', 'like', "%{$search}%");
            })
            ->where('status', 1);

        if (!empty($subCategorySlug)) {
            $subCategory = SubCategory::where('slug', $subCategorySlug)->first();

            if ($subCategory) {
                $properties = $properties->where('sub_category_id', $subCategory->id);
            }
        }

        if ($isRent !== null) {
            // Filter properties based on is_rent
            $properties = $properties->where('is_rent', $isRent);
        }

        $properties = $properties->orderBy('position')->get();

        return view('frontend.property.properties', compact('properties', 'subCategories','search'));
    }


    // public function properties(Request $request)
    // {
    //     $categoryType = $request->input('category_type', \App\Enums\CategoryTypeEnum::PROPERTIES);
    //     $subCategories = SubCategory::with('propertyLists')
    //         ->where('category_type', $categoryType)
    //         ->whereHas('propertyLists',function (Builder $q) {
    //             if (!is_null(request('search'))) {
    //                 $q->whereLike(['registration_no', 'title', 'rate'], request('search'));
    //             }
    //         })
    //         ->paginate(15);

    //     return view('frontend.property.properties', compact('subCategories'));
    // }

    public function vehicles()
    {
        return view('frontend.vehciles');
    }

    public function test()
    {
        return view('test');
    }

    public function propertyDetails(PropertyList $propertyList)
    {
        return view('frontend.property.propertyDetail', compact('propertyList'));
    }

    public function __construct()
    {
        $setting = Setting::latest()->first();

        view()->share('sharedSetting', $setting);
    }
    public function healthcareIndex()
    {
        return view('frontend.healthcare.index');
    }
    public function listPage()
    {
        return view('frontend.healthcare.detailPage');
    }
}
