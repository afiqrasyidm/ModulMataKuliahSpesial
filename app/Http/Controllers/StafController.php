<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staf;
use SSO\SSO;

class StafController extends Controller
{
	
	 var $stafs;
	 
	 
     public function __construct() {
        $this->stafs = Staf::all(array('nama'));
    }
	
	
	
	 public function cari_staf() {
		
		if(SSO::authenticate())	{
			$user = SSO::getUser();
			$_SESSION["user_login"] = $user;

			$staf = Staf::find(4);
			return view('staf/homepage_staf', array('staf' => $staf));
				
		}
	
    }
	
	

}
