<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class HomeController extends Controller
{
	    public function homeindex(Request $req){
    	return View('index');
    }
}

