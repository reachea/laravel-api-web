<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    function index() {
        return view('login');
    }

    function login(Request $request) {
        $isAllow = 0;

        $user = User::where(['email'=> $request -> email, 'password' => md5($request -> password)])->get();

        if ($user) {
            $str = Str::random(32);
            $result = md5($str);

            User::where(['email'=> $request -> email, 'password' => md5($request -> password)]) -> update(['remember_token' => $result]);

            setcookie('token', $result, time() + (60 * 24 * 365 * 10), "/");

            return redirect('/');
        }

        return view('login');
    }
}
