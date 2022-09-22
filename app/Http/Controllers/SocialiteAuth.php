<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


class SocialiteAuth extends Controller
{
    public function redirect(Request $request)
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback(Request $request)
    {
        $user = Socialite::driver('github')->user();
        $user1 = new User();
        $user1->email = $user->getEmail();

        if (User::where('email', '=', $user->getEmail())->exists()) {
            return view('main');
        } else {
            $res = $user1->save();
            session(['id' => $user1->id]);
            return view('first');
        }
    }
}
