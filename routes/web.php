<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
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
});
