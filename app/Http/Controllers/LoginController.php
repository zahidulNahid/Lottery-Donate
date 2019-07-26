<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class LoginController extends Controller
{
    //
    public function index(){
    	return View('index');
    	/*$data = DB::table('users')->get();
    	echo '<pre>';
    	print_r($data);
    	echo '<pre>'; */
    }

    public function loginView(){
    	return View('login');
    }

    public function checkLogin(Request $req){
    	Validator::make($req->all(), [
    			'email' => 'required|min:6',
    			'password' => 'required',
				])->validate();

    	$db = DB::table('users')
    	->where('email',$req->email)
    	->where('password',$req->password)
    	->first();

    	if ($db != null) {
    		
    		$user = DB::table('users')
    				->join('profile','users.userid','=','profile.userid')
    				->where('users.email',$req->email)
    				->first(); 

    		echo '<pre>';
    		print_r($user);
    		echo '</pre>';
            $req->session()->put('fullname',$user->fullName);
    		$req->session()->put('email', $user->email);
    		$req->session()->put('last', $user->lastLogin);

    		if ($db->type == 'Admin') {

    			return redirect()->route('Admin.index');
    			# code...
    		}else if ($db->type == 'User') {
    			# code...
    			return redirect()->route('User.index');
    		}
    	}else{
    		return redirect()->route('Login.loginView');
    	}
    }


    public function registerView(){
    	return View('register');
    }

    public function checkRegistration(Request $req){

    	Validator::make($req->all(), [
    			'fullname' => 'required',
    			'email' => 'required|unique:profile',
    			'phone' => 'required|unique:profile|min:6',
    			'gender' => 'required|min:4',
                'nid' => 'required',
                'password' => 'required',
                'confirmPass' => 'required'
				])->validate();

    	date_default_timezone_set('Asia/Dhaka');
    	$id = DB::table('users')->insert(
   				 ['email' =>  $req->email, 
   				 'password' =>  $req->password,
   				 'type' => 'User',
   				 'lastLogin' => date("Y-m-d h:i:s")
   				]
				);

    	 DB::table('profile')->insert(
   				 [//'userid' =>  $userid, 
   				 'fullname' =>  $req->fullname,
   				 'email' => $req->email,
                 'phone' => $req->phone,
                 'gender' => $req->gender,
                 'nid' => $req->nid,
                 'password' => $req->password,
                 'confirmPass' => $req->confirmPass
   				]
				);

    	 return redirect()->route('landing');
    }

}
