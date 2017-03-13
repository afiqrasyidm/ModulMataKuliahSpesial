<?php

namespace App\Http\Controllers;
use SSO\SSO;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

use App\User;
use App\Industri;
use App\Mahasiswa;

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

    public function login_submit(){
    	$flagSuccess = false;

	    $validator = Validator::make(
	        Input::all(),
	        array(//Unique nya belum
	            "username" => "required",
	            "password" => "required|min:8", //Asumsi ajah
	            )
	    );

	    $UserArr = User::where('username', Input::get('username'))->get();

	    $isUsernameExist = count($UserArr)>0;
	    
	    if(!$validator->passes()) {
	    }

	    //Username tidak terdaftar
	    else if(!$isUsernameExist) {
	        $validator->getMessageBag()->add('wrong_username', 'username tidak terdaftar.');
	    }

	    else if(($UserArr->first()->password==Input::get('password'))!=1) {
	        $validator->getMessageBag()->add('wrong_password', 'Password salah');
	    }

	    else {
	        $flagSuccess = true;
	    }

	    //Jika login sukses
	    if ($flagSuccess) {
	        $user = User::where('username', Input::get('username'))->get()->first();
	        session_start();
	        $_SESSION["user_login"] = $user;
	        return 'Homepage industri belom dibuat. Tapi anda login sebagai username:'.$user->username;
	    }

	    else {
	        //Data error or username taken:
	        return Redirect::to('login')
	            ->withErrors($validator)
	            ->withInput();
	    }
    }

    public function registrasi() {
    	return view('registrasi');
    }

    public function registrasi_submit() {
    	$validator = Validator::make(
        Input::all(),
        array(
            "username" => "required",
            "email" => "required|email", //Harus email
            "password" => "required|min:8", // Asumsi ajah minimal 8 karakter
            "password_confirmation" => "required|same:password", //Harus sama dengan password
           		
           	"nama_lengkap" => "required",
           	"nama_industri" => "required",
           	"jabatan" => "required",
	        )
	    );

	    $isUsernameTaken = count(User::where('username', Input::get('username'))->get())>0;
	    
	    //Username(unique) Validation. Apakah sudah ada atau belum
	    if($isUsernameTaken) {
	        $validator->getMessageBag()->add('duplicate_username', 'username telah terpakai.');
	    }

	    //jika semua validasi terpenuhi simpan ke database
	    else if($validator->passes()) {
	        $user = new User;
	        $user->username    = Input::get('username');
	        $user->password = Input::get('password');
	        $user->save();

			$industri = new Industri;
			$industri->id_user = User::where('username', Input::get('username'))->get()->first()->id_user;
	        $industri->email = Input::get('email');
	        $industri->nama_lengkap = Input::get('nama_lengkap');
	        $industri->nama_industri = Input::get('nama_industri');
	        $industri->jabatan = Input::get('jabatan');
	       	$industri->save();
	        
	        return redirect()->route('/delay');
	    }

	    //Data error or username taken:
	        return Redirect::to('registrasi')
	            ->withErrors($validator)
	            ->withInput();
    }

    public function logout_sso() {
        session_start();
        session_unset();
        session_destroy();
        SSO::logout();
    }

    public function delay() {
    	return view('delay');
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
	
	
	//test untuk view FTBS-S2-S3

	public function login_sso_FTBS_S2_S3() {
		
		if(SSO::authenticate())	{
			$user = SSO::getUser();
			$_SESSION["user_login"] = $user;

			if($user->role == 'mahasiswa') {
				return redirect()->route('homepage/mahasiswa_FTBS_S2_S3');
			}

		
		}
    }
	
	public function homepage_mahasiswa_FTBS_S2_S3(){
		session_start();
		return view('mahasiswa/homepage_mahasiswa_FTBS_S2_S3');
	}
	
	//test untuk view FTBS-S2-S3

	public function login_sso_PA() {
		
		if(SSO::authenticate())	{
			$user = SSO::getUser();
			$_SESSION["user_login"] = $user;

			if($user->role == 'mahasiswa') {
				return redirect()->route('/homepage/PA');
			}

		
		}
    }
	
	public function homepage_PA(){
		session_start();
		return view('dosen/PA/homepage_dosen_PA');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
