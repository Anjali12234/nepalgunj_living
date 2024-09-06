<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function timeline()
    {
        return view('frontend.user.dashboard.timeline');
    }
    // public function posts()
    // {
    //     $categories = Category::with('subCategories')->get();

    //     return view('frontend.user.dashboard.posts',compact('categories'));
    // }

    public function posts()
    {
        $registeredUser = Auth::guard('registered-user')->user();

        $categories = Category::with(['subCategories.propertyLists' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();

        return view('frontend.user.dashboard.posts', compact('categories'));
    }
}
