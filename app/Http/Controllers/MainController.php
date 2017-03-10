<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {
    	return view('home');
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        return redirect()->route('/');
    }
}
