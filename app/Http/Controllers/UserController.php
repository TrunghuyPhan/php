<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class UserController extends Controller
{
    public function Login()
    {
        return view('users.user_login');
    }
    public function Register()
    {
        return view('users.user_reg');
    }
}
