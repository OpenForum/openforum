<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return redirect()->route('forum');
    }

    public function logout()
    {
        return view('pages.logout');
    }
}
