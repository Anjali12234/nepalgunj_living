<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }
    public function properties()
    {
        return view('frontend.property.properties');
    }

    public function vehicles()
    {
        return view('frontend.vehciles');
    }
    public function propertyDetails()
    {
        return view('frontend.property.propertyDetail');
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
