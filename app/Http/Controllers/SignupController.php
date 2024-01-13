<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller
{
    public function signUpView()
    {
        return view('auth.signup');
    }

    public function signUpProcessing(Request $request)
    {

        $newUserData = $request->validate([
            'firstName' => 'required|alpha',
            'lastName' => 'required|alpha',
            'email' => 'required|email|unique:users',
            'userName' => 'required|unique:users|regex:/\w*$/',
            'birthDay' => 'required|date',
            'password' => 'required|min:8|max:16',
        ]);

        $newUser = new User();
        $newUser->firstName = $newUserData["firstName"];
        $newUser->lastName = $newUserData["lastName"];
        $newUser->email = $newUserData["email"];
        $newUser->userName = $newUserData["userName"];
        $newUser->birthDay = $newUserData["birthDay"];
        $newUser->password = $newUserData["password"];


        $newUser->save();



        Auth::login($newUser);

        Session::flash('welcoming message', 'welcome mr '.Auth::user()["firstName"] . " !");
        return redirect(route("getFeedView"));

    }
}
