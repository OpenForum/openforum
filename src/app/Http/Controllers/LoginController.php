<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.signin');
    }

    /**
     * Gets called when someone tries to sign in.
     * @param Request $request
     */
    public function login(Request $request)
    {

    }
}
