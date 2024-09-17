<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostAdController extends Controller
{
    public function index()
    {

        $categories = Category::with('subCategories')->get();
        // dd($categories);
        return view('frontend.user.postAdd', compact('categories'));
    }


}
