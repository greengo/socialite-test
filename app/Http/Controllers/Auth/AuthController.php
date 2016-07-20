<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\User;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
  public function redirectToProvider()
  {
    echo "now we should redirect to github";
    Socialite::driver('github')->redirect();
  }

  public function handleProviderCallback()
  {
    $user = Socialite::driver('github')->user();


    // OAuth Two Providers
    $token = $user->token;
    $refreshToken = $user->refreshToken; // not always provided
    $expiresIn = $user->expiresIn;

    // OAuth One Providers
    $token = $user->token;
    $tokenSecret = $user->tokenSecret;

    // All Providers
    $user->getId();
    $user->getNickname();
    $user->getName();
    $user->getEmail();
    $user->getAvatar();


    return redirect('dashboard');
  }
}
