<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('pages.signin');
    }

    /**
     * Gets called when someone tries to sign in.
     * @param Request $request
     */
    public function handle(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'max:8']
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if(Hash::check($request->input('password'), $user->password)) {
            throw ValidationException::withMessages([
                'password' => 'Incorrect password.'
            ]);
        }
        Auth::login($user);
        return redirect(route('profile'));
    }
}
