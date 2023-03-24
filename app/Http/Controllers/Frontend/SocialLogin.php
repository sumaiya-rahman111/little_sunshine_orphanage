<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\RouteServiceProvider;
use App\Models\User;

class SocialLogin extends Controller
{
    public function gotogoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function store(){
        $userSocial = Socialite::driver('google')->user();
        
        $user = User::where('sid',$userSocial->id)->first();
        if(!$user){
            $userNew = new User;
            $userNew->sid = $userSocial->id;
            $userNew->name = $userSocial->name;
            $userNew->email = $userSocial->email;
            $userNew->photo = $userSocial->avatar;
            $userNew->save();
            
            Auth::login($userNew);
            return redirect()->intended(RouteServiceProvider::HOMEPAGE);
        }else{
            Auth::login($user);
            return redirect()->intended(RouteServiceProvider::HOMEPAGE);
        }
    }
}
