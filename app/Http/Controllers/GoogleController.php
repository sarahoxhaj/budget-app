<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // public function callbackFromGoogle()
    // {
    //     try {
    //         $user = Socialite::driver('google')->user();
    //         // Check Users Email If Already There
    //         $is_user = User::where('email', $user->getEmail())->first();
    //         if (!$is_user) {

    //             $saveUser = User::updateOrCreate([
    //                 'google_id' => $user->getId(),
    //             ], [
    //                 'email' => $user->getEmail(),
    //                 'password' => Hash::make('kaka' . '@' . $user->getId())
    //             ]);
    //         } else {
    //             $saveUser = User::where('email',  $user->getEmail())->update([
    //                 'google_id' => $user->getId(),
    //             ]);
    //             $saveUser = User::where('email', $user->getEmail())->first();
    //         }
    //         Auth::loginUsingId($saveUser->id);
    //         return view('main');
    //     } catch (\Throwable $th) {
    //         throw $th;
    //     }
    // }
    public function callbackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            dd($user);
            // $userExisted = User::where('email', $user->email)->first();
            // if (!$userExisted) {
            //     $saveUser = User::create([
            //         'email' => $user->email,
            //         'oauth_id' => $user->id,
            //         'oauth_type' => 'google',
            //         'password' => Hash::make($user->id)

            //     ]);
            //     Auth::login($saveUser); // 00
            //     session(['user' => "loggedin"]);
            //     return view('main');
            // } else {
            //     $saveUser = User::where('email', $user->email)->update([
            //         'oauth_id' => $user->id,
            //     ]);
            //     session(['user' => "loggedin"]);
            //     $saveUser = User::where('email', $user->email)->first();
            // }
            // session(['user' => "loggedin"]);
            // Auth::login($saveUser);
            // //            return redirect()->route('welcome');
            // return view('main');
        } catch (Exception $e) {
            dd($e);
        }
    }
}
