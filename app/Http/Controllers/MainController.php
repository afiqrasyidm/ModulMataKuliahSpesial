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
			return view('homepage_mahasiswa');
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
	
	 public function staf_homepage(){
		 if(SSO::authenticate())	{
			$user = SSO::getUser();
			$_SESSION["user_login"] = $user;
			return view('homepage_staf');
		}
		 	
	}	 
	 public function dosen_homepage(){
		 if(SSO::authenticate())	{
			$user = SSO::getUser();
			$_SESSION["user_login"] = $user;
			return view('homepage_dosen');
		}
		 	
	}
	
}
