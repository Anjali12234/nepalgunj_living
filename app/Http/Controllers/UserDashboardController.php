<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function timeline()
    {
        return view('frontend.user.dashboard.timeline');
    }
    public function posts(SubCategory $subCategory)
    {
        return view('frontend.user.dashboard.posts',compact('subCategory'));
    }
}
