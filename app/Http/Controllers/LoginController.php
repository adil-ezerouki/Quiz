<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

        $isEmailvalid = $isPassvalid = false;

        $emailFromDB = User::where('email', $validatedCredentials['email'])->get();
        $users = User::all();


        foreach ($users as $user) {
            if (Hash::check($validatedCredentials['password'], $user['password'])) {
                $isPassvalid =  true;
            }
        }



        if (count($emailFromDB) > 0) {
            $isEmailvalid = true;
        }


        if (Auth::attempt($validatedCredentials)) {
            $isEmailvalid =  $isPassvalid = true;
            Session::flash('welcoming_message', 'welcome mr ' . Auth::user()["firstName"] . " !");
            return redirect(route('getDashboard'));
        } else {

            $wrongCrede = '';

            switch (false) {
                case $isEmailvalid:
                    $wrongCrede = 'email is ';
                    break;
                case $isPassvalid:
                    $wrongCrede = 'password is ';
                    break;
            }

            if ($isEmailvalid == false && $isPassvalid == false) {
                $wrongCrede = 'password and email are both ';
            }





            Session::flash('wrongCredeMsg', "your " . $wrongCrede . ' wrong try again !');
            return redirect(route('loginView'));
        }
    }

    public function logout()
    {

        Auth::logout();
        return redirect(route('loginView'));
    }
}
