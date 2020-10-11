<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        // $data = array([
        //             'email'=>$request['email'],
        //             'password'=>bcrypt($request['password'])
        //             ]);
        // dd($data);
        dd(auth()->attempt($credentials));
        // if(Auth::attempt($userdata)){
        //     return 'True';
        // }
        // return 'False';
    }
}
