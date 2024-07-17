<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (session()->has('user'))
            return view('admin.index');
        else
            return to_route('login.show');
    }
    public function login()
    {
        return view('login');
    }
    public function signin()
    {
        return view('signin');
    }
}
