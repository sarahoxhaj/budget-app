<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Contracts\Session\Session as Session;
use Illuminate\Support\Facades\Hash;
use Session;





class CustomAuthController extends Controller
{
    public function login()
    {
        return "/";
    }
    public function registration()
    {
        return view("auth.registration");
    }
    public function registerUser(Request $request)
    {
        $rules = [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12|regex:/[@$!%*#?&]/',
        ];

        $customMessages = [
            'email.required' => 'Email is required.',
            'email.email' => 'This email format is invalid.',
            'email.unique' => 'This email is already taken.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must contain minimum 5 characters.',
            'password.max' => 'Password must contain maximum 12 characters.',
            'password.regex' => 'Password must contain at least one symbol.',
        ];

        $request->validate($rules, $customMessages);
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return redirect('/')->with('success', "Account successfully registered.");
        } else {
            return back()->with('fail', 'Something went wrong!');
        }
    }

    public function loginUser(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12|regex:/[@$!%*#?&]/',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginid', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('msg', 'Password is incorrect.');
            }
        } else {
            return back()->with('msg', 'This user is not registered');
        }
    }

    public function dashboard()
    {
        return view("main");
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
