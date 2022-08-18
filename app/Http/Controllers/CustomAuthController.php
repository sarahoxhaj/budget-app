<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Budget;
use App\Models\Account;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public $x;

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
            session(['id' => $user->id]);
            return view('first');
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
                session(['userModel' => $user]);
                session(['user' => "loggedin"]);

                session(['id' => $user->id]);
                session(['email' => $user->email]);

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

        $wallet = $request->wallet;
        $currency = $request->currency;
        $balance = $request->balace;

        $array = session()->get('id');

        $date = Carbon::now();
        $monthName = $date->format('F');
        $values = array('idUseri' => $array, 'month' => $monthName, 'currency' => $currency, 'amount' => $balance, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now());
        DB::table('budget')->insert($values);

        $values = array('idUseri' => $array, 'name' => $wallet, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now());
        DB::table('account')->insert($values);


        return view('transactions')->with(compact('wallet', 'currency', 'balance'));
    }

    public function getData()
    {
        $useri = session()->get('id');
        $usersDetails = DB::table('budget')
            ->join('account', 'budget.idUseri', '=', 'account.idUseri') // joining the contacts table , where user_id and contact_user_id are same
            ->select('budget.amount', 'budget.currency', 'budget.month', 'account.name')
            ->where('budget.idUseri', '=', $useri)
            ->get();

        return view("static", compact('usersDetails'));
    }

    public function transView()
    {
        $useri = session()->get('id');

        $usersDetails = DB::table('budget')
            ->join('account', 'budget.idUseri', '=', 'account.idUseri')
            ->where('budget.idUseri', '=', $useri)
            ->select('budget.idUseri', 'budget.amount', 'budget.currency', 'budget.month', 'account.name')
            ->get();

        return view("addTrans", compact('usersDetails'));



        //dd($usersDetails);
    }

    public function transaction(Request $request)
    {
        $rules = [
            'category' => 'required',
            'amount' => 'required|integer',
            'notes' => 'nullable',
        ];

        $customMessages = [
            'category.required' => 'Please choose a category',
            'amount.required' => 'Amount is required',
            'amount.integer' => 'Amount must be a number',
        ];
        $request->validate($rules, $customMessages);

        $useri = session()->get('id');

        //$account = Account::where('idUseri', $useri)->first(['id']);
        $account = DB::table('account')->where('idUseri', $useri)->value('id');
        //$categ = Category::where('name', $request->category)->first(['id']);
        $categ = DB::table('category')->where('name', $request->category)->value('id');

        // DB::table('transaction')->insert(
        //     ['idUseri' => $useri, 'idAccount' => $account, 'idCategory' => $categ, 'amount' => $request->amount, 'notes' => $request->notes, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        // );


        $values = array('idUseri' => $useri, 'idAccount' => $account, 'idCategory' => $categ, 'amount' => $request->amount, 'notes' => $request->notes, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now());
        DB::table('transaction')->insert($values);

        return view('main');

        //dd($account);
    }




















    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
