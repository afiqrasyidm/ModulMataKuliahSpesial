<?php

namespace App\Http\Controllers;
use SSO\SSO;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {
    	return view('home');
    }

    public function login() {
		SSO::authenticate();

		return view('login-sso');
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        return redirect()->route('/');
    }
}
