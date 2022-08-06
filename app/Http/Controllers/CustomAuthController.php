<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
            return view('first');
            //return redirect('/')->with('success', "Account successfully registered.");
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

                // $count = 0;
                // $user->update([
                //     'last_login_at' => Carbon::now()->toDateTimeString(),
                // ]);
                // $data = DB::table('users')->where('email', $request->email)->value('last_login_at');

                return view('main');
            } else {
                return back()->with('msg', 'Password is incorrect.');
            }
        } else {
            return back()->with('msg', 'This user is not registered');
        }
    }

    public function datas(Request $request)
    {
        //$info = request()->all();
        // dd($info);


        $wallet = $request->wallet;
        $currency = $request->currency;
        $balance = $request->balace;

        //return view('transactions')->with('wallet', $balance);
        return view('transactions')->with(compact('wallet', 'currency', 'balance'));
    }

    // public function transactions()
    // {
    //     return view('transactions');
    // }


    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
