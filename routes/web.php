<?php

use App\Http\Controllers\SocialLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//github
Route::get('auth/github', [SocialLoginController::class, 'redirectToProvider'])->name('auth.github');
Route::get('auth/github/callback', [SocialLoginController::class, 'redirectToCallback'])->name('auth.github.callback');
//google
Route::get('auth/google', [SocialLoginController::class, 'redirectToGoogleProvider'])->name('auth.google');
Route::get('auth/google/callback', [SocialLoginController::class, 'redirectToGoogleCallback'])->name('auth.google.callback');
//facebook
Route::get('auth/facebook', [SocialLoginController::class, 'redirectToFbProvider'])->name('auth.facebook');
Route::get('auth/facebook/callback', [SocialLoginController::class, 'redirectToFbCallback'])->name('auth.facebook.callback');
//twitter
Route::get('auth/twitter', [SocialLoginController::class, 'redirectToTwitterProvider'])->name('auth.twitter');
Route::get('auth/twitter/callback', [SocialLoginController::class, 'redirectToTwitterCallback'])->name('auth.twitter.callback');
//linkedin
Route::get('auth/linkedin', [SocialLoginController::class, 'redirectToLinkedinProvider'])->name('auth.linkedin');
Route::get('auth/linkedin/callback', [SocialLoginController::class, 'redirectToLinkedinCallback'])->name('auth.linkedin.callback');
