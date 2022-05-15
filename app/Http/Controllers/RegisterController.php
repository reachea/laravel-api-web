<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function index() {
        return view('register');
    }

    function register(Request $request) {
        $isAllow = 0;

        if ($request -> email === "admin") {
            $isAllow += 1;
        }

        if ($request -> password === "admin") {
            $isAllow += 1;
        }

        if ($isAllow == 2) {
            return view('/register', 
                ["email" => $request -> email]
            );
        }
    }
}
