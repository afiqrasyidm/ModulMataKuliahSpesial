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

use App\Prodi;
use App\Fakultas;


class MainController extends Controller
{
    public function index() {
    	return view('index');
    }

    public function login_sso() {
		
		if(SSO::authenticate())	{
			$user = SSO::getUser();
			$_SESSION["user_login"] = $user;
			
			$username=$user->username;
			
			$UserArr = User::where('username', $username )->get();
			
			$isUsernameExist = count($UserArr)>0;
			
			
			if($isUsernameExist){
				$roleUser = User::where('username', $username)->get()->first();
				
				if( ($roleUser->role == "mahasiswa" )){		
						//ambil row dimahasiswa
						
						$mahasiswa=Mahasiswa::where('id_user',$roleUser->id_user)->get()->first();
						
						//cek jenjang
						if($mahasiswa->jenjang == "S1"){
						
							$_SESSION["mahasiswa_jenjang"] = "S1";
						}
						else if($mahasiswa->jenjang == "S2"){
							$_SESSION["mahasiswa_jenjang"] = "S2";
							}
						else{
							$_SESSION["mahasiswa_jenjang"] = "S3";
							}
							
							
						//cek fakultas apakah FTBS atau tidak, untuk sementara hanya ada fasilkom dan fh
						$id_fakultas= Prodi::where('id_prodi',$mahasiswa->id_prodi )->get()->first()->id_fakultas;
						
						$namaFakultas = Fakultas::where('id_fakultas',$id_fakultas )->get()->first()->nama_fakultas;
						
						
						$_SESSION["mahasiswa_nama_fakultas"] = $namaFakultas;
						
						return redirect()->route('homepage/mahasiswa');
			
					}
				else if(($roleUser->role == "dosen")){
				
				
						return redirect()->route('homepage/dosen');
								
				}
				else {
					return redirect()->route('homepage/staf');
					
				}
	
			
			}
			else {
				return redirect()->route('/');
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
	        return redirect()->route('homepage/industri');
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
			$user->role = "industri";
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

	public function industri_homepage(){
		session_start();
		return view('industri/homepage_industri');
	}	
	
}
