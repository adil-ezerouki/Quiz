<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function loginProcessing(Request $request)
    {
        $credentials = $request->all();


        if (array_key_exists('userName', $credentials)) {

            $validatedCredentials = $request->validate([
                'userName' => 'required',
                'password' => 'required|min:8',
            ]);
        }

        $validatedCredentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8',
        ]);



        if (Auth::attempt($validatedCredentials)) {
            return redirect(route('getDashboard'));
        } else {
            return 'no';
        }
    }
}
