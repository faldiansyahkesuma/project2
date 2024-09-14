<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function login()
     {
        return view('auth.login');
        }

        function register() {
            return view('auth.register');
        }
}
