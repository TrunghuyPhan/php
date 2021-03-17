<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function AllProduct(){
        $all_product = Product::all();
        return view('product.products')->with('all_product',$all_product); //1
    
        // $all_product = DB::select("SELECT * FROM tbl_product");
        // return view('users.products')->with('all_product',$all_product); //1
    
    }
}
