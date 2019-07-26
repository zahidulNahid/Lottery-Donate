<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class LogoutController extends Controller
{
	    public function index(Request $req){
        if($req->session()->has('fullname')){
            $req->session()->flush();
            return View('login');
        }
   
    }
}
