<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostAddController extends Controller
{
    public function index()
    {
        $categories = Category::with('category')->get();
        return view('frontend.user.postAdd', compact('categories'));
    }
}
