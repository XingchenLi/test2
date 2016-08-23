<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getPassword(){
      return view('changePassword');
    }
    public function getClient(){
        return view('client');
    }
    public function getInvestor(){
        return view('investor');
    }

    public function haveAccess(){
        return 'you have access as'.Auth::user();
    }


    public function changePassword(Request $request,$id){
        $user = User::find();
        echo "user:"." ".$user->name;

    }
}
