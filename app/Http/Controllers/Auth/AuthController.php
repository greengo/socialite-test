<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\User;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
  public function redirectToProvider()
  {
    Socialite::driver('github')->redirect();
  }

  public function handleProviderCallback()
  {

  }
}
