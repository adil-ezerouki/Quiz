<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class OauthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $findUser = User::where('social_id', $user->id)->first();


            if ($findUser) {
                Auth::login($findUser);
                return redirect(route('getDashboard'));
            } else {

                $newUser = new User();
                $newUser->firstName = $user->getName();
                $newUser->lastName = $user->getName();
                $newUser->email = $user->getEmail();
                $newUser->userName = 'Adil Ez';
                $newUser->birthDay = 'hh';
                $newUser->password = '1231';
                $newUser->social_id = $user->id;
                $newUser->social_type = 'google';


                $newUser->save();

                Auth::login($newUser);
                return redirect(route('getDashboard'));
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function handleFacbookCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $findUser = User::where('social_id', $user->id)->first();

            if ($findUser) {
                Auth::login($findUser);
                // return redirect(route('getDashboard'));
                return response()->json($findUser);
            } else {
                $newUser = User::create([
                    'firstName' => '$user->name',
                    'lastName' => '$user->name',
                    'social_id' => $user->id,
                    'social_type' => 'facebook',
                    'password' => Hash::make('my-facebook')
                ]);

                Auth::login($newUser);
                // return redirect(route('getDashboard'));
                return response()->json($newUser);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
