<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class UserController extends Controller
{
    //
    public function index(Request $req){
        if($req->session()->has('fullname')){
            return View('user.home');
        }
    	return View('login');
    }
    public function profile(Request $req){
        if($req->session()->has('fullname')){
            return View('user.profile');
        }
    	return View('login');
    }


    public function lottery(Request $req){
        if($req->session()->has('fullname')){
            return View('user.lottery');
        }
        return View('login');
    }
    public function settings(Request $req){
        if($req->session()->has('fullname')){
            return View('user.settings');
        }
        return View('login');
    }
    public function donate(Request $req){
        if($req->session()->has('fullname')){
            return View('user.donate');
        }
        return View('login');
    }
    public function ticket(Request $req){
        if($req->session()->has('fullname')){
            return View('user.ticket');
        }
        return View('login');
    }

    /*public function show(){
        //$lt= User::find($id);
        $lt= DB::table('lotterynumber')
        ->first();

        return view('user.lottery')->with('lt', $lt);
    }*/

    public function sendDonate(Request $req){
       Validator::make($req->all(), [
        'amount' => 'required|min:2',
        'trxid' => 'required',
        'phone' => 'required',
        ])->validate();

        $db = DB::table('users')
        ->where('userid',$req->userid)
        ->where('email',$req->email)
        ->first();

        //$req->session()->put('userid',$db->userid);


    }

    public function edit(Request $req){
        if($req->session()->has('fullname')){
            return View('user.edit');

        $account = DB::table('profile')
            ->where('userId', $id)
            ->first();

        return view('user.edit')
            ->with('user', $account);
        }
        return View('login');
    }

}
