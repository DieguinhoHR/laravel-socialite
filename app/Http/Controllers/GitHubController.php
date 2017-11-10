<?php

namespace App\Http\Controllers;

use Socialite;

class GitHubController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        $user->token;

        return redirect('/home');
    }
}
