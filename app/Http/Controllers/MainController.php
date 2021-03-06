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
use Crypt;

use App\Tugas_akhir;

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
				
				$_SESSION["role_user"] = $roleUser->role;
				
				$_SESSION["id_user"] = $roleUser->id_user;
				
				if( ($roleUser->role == "mahasiswa" )){		
						//ambil row dimahasiswa
						
						$mahasiswa=Mahasiswa::where('id_user',$roleUser->id_user)->get()->first();
						
						$_SESSION["mahasiswa"] = $mahasiswa;
							
						//cek fakultas apakah FTBS atau tidak, untuk sementara hanya ada fasilkom dan fh
						$prodi= Prodi::where('id_prodi',$mahasiswa->id_prodi )->get()->first();
						
						$fakultas = Fakultas::where('id_fakultas',$mahasiswa->id_fakultas )->get()->first();
						
						$_SESSION["fakultas"] = $fakultas;
						$_SESSION["prodi"] = $prodi;
						
						$tugasakhir = Tugas_akhir::select ('status_tugas_akhir')->where('id_mahasiswa', $mahasiswa)->get()->first();
							$status = "";
							if ($tugasakhir != NULL){
								$status = $tugasakhir->status_tugas_akhir;
							}

						 return redirect ()->route("homepage/mahasiswa");


				}

				else if(($roleUser->role == "dosen")){
				
				
						return redirect()->route('homepage/dosen');
								
				}
				
				else if(($roleUser->role == "managerial")){
				
				
						return redirect()->route('homepage/managerial');
								
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
	        $validator->getMessageBag()->add('wrong_username', 'username/password salah');
	    }

	    else if((Crypt::decrypt($UserArr->first()->password) == Input::get('password'))!=1) {
	        $validator->getMessageBag()->add('wrong_password', 'username/password salah ');
	    }

	    else {
	        $flagSuccess = true;
	    }

	    //Jika login sukses
	    if ($flagSuccess) {
	        $user = User::where('username', Input::get('username'))->get()->first();
	        session_start();
	        $industri = Industri::where('id_user', $user->id_user)->get()->first();
	        
			
			
			$_SESSION["user_login_industri"] = $industri;
			$_SESSION["role_user"]= "industri";
			
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
	        $user->password = Crypt::encrypt(Input::get('password'));
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
		SSO::logout(url('/')); }

    public function delay() {
    	return view('delay');
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
	public function forbidden_access(){
		session_start();
		return view('forbidden_access');
		
	}
	
	public function page_not_found(){
		session_start();
		return view('page_not_found');
		
	}
	
}
