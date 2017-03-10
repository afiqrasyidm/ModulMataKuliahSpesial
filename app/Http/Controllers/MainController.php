<?php

namespace App\Http\Controllers;
use SSO\SSO;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {
    	return view('index');
    }

    public function login_sso() {
		
		if(SSO::authenticate())	{
			$user = SSO::getUser();
			$_SESSION["user_login"] = $user;
			return view('home');
		}
		else {
			return redirect()->route('/');
		}
		
    }

    public function logout_sso() {
        session_start();
        session_unset();
        session_destroy();
        SSO::logout();
    }
}
