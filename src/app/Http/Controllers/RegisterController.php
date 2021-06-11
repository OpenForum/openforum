<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware('auth.redirect');
    }
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
        //Validates the form by checking the input fields. if invalid. A form error will be shown in the user screen.
        $this->validate($request, [
            'name' => [ 'bail', 'required', 'max:50', 'unique:users'],
            'display_name' => ['required', 'max:15'],
            'gender' => 'required',
            'email' => ['bail', 'required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'min:8']
        ]);

        //Creates a new user.
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        //Creates a new user profile that's attached to the user.
        $profile = new Profile();
        $profile->display_name = $request->input('display_name');
        $profile->gender = $request->input('gender');
        $profile->user_id = $user->id;
        $profile->save();

        //Let's login the user before redirecting him.
        Auth::login($user);

        //And finally, lets redirect the freshly created user to his profile page where he can continue editing his information.
        return redirect(route('profile'));
    }
}
