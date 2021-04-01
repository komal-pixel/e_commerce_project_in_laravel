<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class productController extends Controller
{
 function product(){
 	$data = Product::All();
 	return  view('product',['items'=>$data]);
 }

 function product_details(request $req){
 	$data = product::find($req->id);
 	return view('product_details',['items'=>$data]);

 }
}
