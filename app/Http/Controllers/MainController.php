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

			if($user->role == 'mahasiswa') {
				return redirect()->route('homepage/mahasiswa');
			}

			else {
				return redirect()->route('homepage/staf');
			}
		}
		else {
			return redirect()->route('/');
		}
		
    }
	  
    public function login() {
    	return view('login');
    }

    public function registrasi() {
    	return view('registrasi');
    }

    public function logout_sso() {
        session_start();
        session_unset();
        session_destroy();
        SSO::logout();
    }
	
	public function mahasiswa_homepage(){
		session_start();
		return view('mahasiswa/homepage_mahasiswa');
	}
	
	public function staf_homepage(){
		session_start();
		return view('staf/homepage_staf');
	}	
	

	public function dosen_homepage(){
		session_start();
		return view('dosen/homepage_dosen');
	}
	
}
