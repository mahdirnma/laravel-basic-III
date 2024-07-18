<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin(StoreUserRequest $request)
    {
        $name = $request->name;
        $username = $request->username;
        $password = $request->password;
        $repeat_password = $request->repeat_password;
        if ($password==$repeat_password) {
            $user=User::create([
                'name' => $name,
                'username' => $username,
                'password' => $password
            ]);
            if ($user){
                session()->put('user',true);
                return to_route("index");
            }else{
                return to_route("signin.show");
            }
        }else{
            return to_route("signin.show");
        }
    }

    public function login(StoreUserLoginRequest $request)
    {
        $username = $request->username;
        $password = $request->password;
        $user=User::where('username',$username)->where('password',$password)->first();
        if ($user){
            session()->put('user',true);
            return to_route("index");
        }else{
            return to_route("login.show");
        }
    }
}
