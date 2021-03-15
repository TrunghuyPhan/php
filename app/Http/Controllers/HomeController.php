<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD

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
=======
use Illuminate\Support\Facades\DB;
use App\Product;
class HomeController extends Controller
{
    public function Index(){
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby(DB::raw('RAND()'))->paginate(6); 
        return view('users.home')->with('all_product',$all_product); //1
    
>>>>>>> 948e848bef97812653e81d9cbc3aa03aa8f8107e
    }
}
