<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        dd(auth()->attempt(['email'=>$request['email'],'password'=>Hash::make($request['password'])]));
        // if(Auth::attempt($userdata)){
        //     return 'True';
        // }
        // return 'False';
    }
}
