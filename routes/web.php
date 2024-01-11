<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('loginView'));
});


Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
Route::post('login', [LoginController::class, 'loginProcessing'])->name('loginProcessing');

Route::get('signup', [SignupController::class, 'signUpView'])->name('signupView');
Route::post('signup', [SignupController::class, 'signUpProcessing'])->name('signupProcessing');


Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'getDashboard'])->name('getDashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

// Oauth

Route::get('auth/google',[OauthController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('auth/google/callback',[OauthController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');

Route::get('auth/facebook',[OauthController::class, 'redirectToFacebook'])->name('redirectToFacebook');
Route::get('auth/facebook/callback',[OauthController::class, 'handleFacebookCallback'])->name('handleFacebookCallback');

// feed

Route::get('feed', [FeedController::class, 'getFeedView'])->name('getFeedView');

// dashboard

Route::get('dashboard', [DashboardController::class, 'getDashboardView'])->name('getDashboardView');



Route::get('test', function () {
    $user = Auth::user();
    return ;
});
