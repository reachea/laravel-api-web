<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index() {
        if (isset($_COOKIE['token']) && $_COOKIE['token'] !== '') {
            $user = User::where(['remember_token' => $_COOKIE['token']]) -> get() -> first();

            return view('home', [
                "email" => $user -> email
            ]);
        }

        return redirect('/login');
    }
}
