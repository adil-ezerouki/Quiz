<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    public function loginView()
    {
        return view('auth.signup');
    }

    public function loginProcessing(Request $request)
    {
        $credentials = $request->except(['_token']);

    }
}
