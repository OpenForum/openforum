<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Returns the page where the user can edit his profile.
     */
    public function index()
    {
        $user = Auth::user();

    }

}
