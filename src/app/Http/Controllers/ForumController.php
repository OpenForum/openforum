<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Thread;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        return view('pages.forum.forum');
    }

    public function category(Category $category)
    {
        return view('pages.forum.category', ['category' => $category]);
    }

    public function thread(Thread $thread)
    {

    }
}
