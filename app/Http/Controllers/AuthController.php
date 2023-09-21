<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    

    public function adminLogin(){
        return view('admin.auth.login');
    }

    public function adminAuthenticate(Request $request){
        return $this->loginAdmin($request);
    }

    public function githubLogin(){
        return Socialite::driver('github')->redirect();
        
    }

    public function githubCallback(){
        $user = Socialite::driver('github')->user();
        dd($user);
    }

    public function twitterLogin(){
        return Socialite::driver('twitter')->redirect();
    }

    public function twitterCallback(){
        $user = Socialite::driver('twitter')->user();
        dd($user);
    }

    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(){
        $user = Socialite::driver('google')->user();
        dd($user);
    }
 
 
   
}

