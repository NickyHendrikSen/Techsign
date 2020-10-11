<?php

namespace App\Http\Controllers;

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
        // dd(auth()->attempt($credentials));
        if(Auth::attempt($userdata)){
            return redirect('/home');
        }
        return redirect()->back();
    }

    public function register(Request $request){
        $name = $request['name'];
        $phone = $request['email'];
        $email = $request['email'];
        $password = $request['password'];
        $balance = 0;
        $role = "User";

        try{
            DB::table('users')->insert([
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'password' => bcrypt($password),
                'role' => $role,
                'balance' => $balance
            ]);
        }
        catch(Exception $e){
            return json_encode(array("code" => 0, "message" => "Failed Register"));
        }
            
        return json_encode(array("code" => 1, "message" => "Success Register"));
    }
}
