<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Huy()
    {
        return view('users.index');
    }
    public function About()
    {
        return view('users.about');
    }
}
