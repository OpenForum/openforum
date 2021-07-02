<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Thread;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.forum.forum', compact('categories'));
    }

    public function category(Category $category)
    {
        return view('pages.forum.category', ['category' => $category]);
    }

    public function thread(Thread $thread)
    {

    }

    public function create_category() {
        return view('pages.forum.create_category');
    }
}
