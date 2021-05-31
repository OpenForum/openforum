<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function login()
    {
        return view('pages.login');
    }
    public function register()
    {
        return view('pages.register');
    }

    public function logout()
    {
        return view('pages.logout');
    }

    public function signin(Request $request)
    {
        //TODO:: Add signin code.
    }

    public function signup(Request $request)
    {
        //Todo:: Add signup code.
    }
}
