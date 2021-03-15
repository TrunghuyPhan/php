<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
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
=======
>>>>>>> f2a946c39c62983bef477637e3f8ef2e4814b404
use Illuminate\Support\Facades\DB;
use App\Product;
class HomeController extends Controller
{
    public function Index(){
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby(DB::raw('RAND()'))->paginate(6); 
        return view('users.home')->with('all_product',$all_product); //1
    
<<<<<<< HEAD
>>>>>>> 948e848bef97812653e81d9cbc3aa03aa8f8107e
=======
>>>>>>> f2a946c39c62983bef477637e3f8ef2e4814b404
    }
}
