<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::all()->count();
        $categories = Category::all()->count();
        if (session()->has('user'))
            return view('admin.index', compact('products', 'categories'));
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
