<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
 	function login(Request $req){
 		// return db::connection()->getdatabaseName();
 		$user = User::where(['email'=>$req->email])->first();
 		if(!$user || !Hash::check($req->password, $user->password)){
 			echo "Username Or Password is Wrong !";
 		}else{
 			$req->session()->put('user',$user);
 			return redirect('product');
 		}
 	}
}

