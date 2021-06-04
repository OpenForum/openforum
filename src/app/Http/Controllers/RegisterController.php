<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.signup');
    }

    /**
     * Gets called when someone signs up on the website.
     * @param Request $request
     */
    public function register(Request $request)
    {

    }
}
