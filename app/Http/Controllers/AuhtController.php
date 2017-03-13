<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuhtController extends Controller
{
    public function login(){
    	if (!Auth::check()){
    	return view('auth.login');
		}
		return redirect()->route('dashboard');
    }
    public function register(){
    	return view('auth.register');
    }
    public function check_reg(Request $request){
    	$this-> validate($request,
    		[
    			'username' 			=> 'required|min:2|max:12',
    			'email'				=> 'required|unique:users',
    			'password'			=> 'required|min:6|max:24',
    			'repeat_password'	=> 'required|same:password'
    		]);

    	$user = new User;
    	$user->user_name = $request['username'];
    	$user->email 	= $request['email'];
    	$user->password = bcrypt($request['password']);
    	$user->role_ide = '0';
    	$user->save();

    	$args=array('info'=> 'You Have Succesfully Registered!');
    	return redirect()->back()->with($args);
    }
    public function gologin(Request $request){
    	$this->validate($request,
    		[
    		'username'	=>	'required|min:2|max:12',
    		'password'	=>	'required|min:6|max:24'
    		]);

    	if (Auth::attempt(['user_name'=>$request['username'], 'password' => $request['password']])){

    	}
    }
}
