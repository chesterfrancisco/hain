<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    //
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    
    // Facebook
    public function handleFacebookCallback()
    {
        $userSocial = Socialite::driver('facebook')->stateless()->user(); // ✅ Add stateless()

        $user = User::firstOrCreate(
            ['email' => $userSocial->getEmail()],
            [
                'name' => $userSocial->getName(),
                'provider' => 'facebook',
                'provider_id' => $userSocial->getId(),
                'password' => bcrypt(Str::random(16)), // random password
                'user_type' => 'customer', // Default user type
                'phone_number' => null, 
                'address' => null,
                'profile_image' => null
            ]
        );

        Auth::login($user);

        return redirect()->route('login')->with('success', 'Account has been successfully created!');
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google
    public function handleGoogleCallback()
    {
        $userSocial = Socialite::driver('google')->stateless()->user(); // ✅ Add stateless()

        $user = User::firstOrCreate(
            ['email' => $userSocial->getEmail()],
            [
                'name' => $userSocial->getName(),
                'provider' => 'google',
                'provider_id' => $userSocial->getId(),
                'password' => bcrypt(Str::random(16)),
                'user_type' => 'customer', // Default user type
                'phone_number' => null, 
                'address' => null,
                'profile_image' => null
            ]
        );

        Auth::login($user);

        return redirect()->route('login')->with('success', 'Account has been successfully created!');
    }

}
