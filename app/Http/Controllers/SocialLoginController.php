<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;


class SocialLoginController extends Controller
{
    //with github login
    public function redirectToProvider(){
        return Socialite::driver('github')->redirect();
    }
    public function redirectToCallback(){
        $gitUser = Socialite::driver('github')->user();

        $authUser = User::where('email', $gitUser->getEmail())->orWhere('provider_id', $gitUser->getId())->first();
        if($authUser){
            Auth::login($authUser);
            return redirect()->route('home');
        }else{
            $user = new User();
            $user->name = $gitUser->getName();
            $user->email = $gitUser->getEmail();
            $user->provider_id = $gitUser->getId();
            $user->save();
            Auth::login($user);
            return redirect()->route('home');
        }
    }
    //with google login
    public function redirectToGoogleProvider(){
        return Socialite::driver('google')->redirect();
    }
    public function redirectToGoogleCallback(){
        $gitUser = Socialite::driver('google')->user();
        $authUser = User::where('email', $gitUser->getEmail())->orWhere('provider_id', $gitUser->getId())->first();
        if($authUser){
            Auth::login($authUser);
            return redirect()->route('home');
        }else{
            $user = new User();
            $user->name = $gitUser->getName();
            $user->email = $gitUser->getEmail();
            $user->provider_id = $gitUser->getId();
            $user->save();
            Auth::login($user);
            return redirect()->route('home');
        }
    }
     //with facebook login
    public function redirectToFbProvider(){
        return Socialite::driver('facebook')->redirect();
    }
    public function redirectToFbCallback(){
        $gitUser = Socialite::driver('facebook')->user();

        $authUser = User::where('email', $gitUser->getEmail())->orWhere('provider_id', $gitUser->getId())->first();
        if($authUser){
            Auth::login($authUser);
            return redirect()->route('home');
        }else{
            $user = new User();
            $user->name = $gitUser->getName();
            $user->email = $gitUser->getEmail();
            $user->provider_id = $gitUser->getId();
            $user->save();
            Auth::login($user);
            return redirect()->route('home');
        }
    }

     //with Linkedin login
     public function redirectToLinkedinProvider(){
        return Socialite::driver('linkedin')->redirect();
    }
    public function redirectToLinkedinCallback(){
        $gitUser = Socialite::driver('linkedin')->user();

        $authUser = User::where('email', $gitUser->getEmail())->orWhere('provider_id', $gitUser->getId())->first();
        if($authUser){
            Auth::login($authUser);
            return redirect()->route('home');
        }else{
            $user = new User();
            $user->name = $gitUser->getName();
            $user->email = $gitUser->getEmail();
            $user->provider_id = $gitUser->getId();
            $user->save();
            Auth::login($user);
            return redirect()->route('home');
        }
    }
    //with twitter login
    public function redirectToTwitterProvider(){
        return Socialite::driver('twitter')->redirect();
    }
    public function redirectToTwitterCallback(){
        $gitUser = Socialite::driver('twitter')->user();

        $authUser = User::where('email', $gitUser->getEmail())->orWhere('provider_id', $gitUser->getId())->first();
        if($authUser){
            Auth::login($authUser);
            return redirect()->route('home');
        }else{
            $user = new User();
            $user->name = $gitUser->getName();
            $user->email = $gitUser->getEmail();
            $user->provider_id = $gitUser->getId();
            $user->save();
            Auth::login($user);
            return redirect()->route('home');
        }
    }





}
