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
 function search(Request $req){
 	$data = Product::
 	Where('product','LIKE','%'.$req->input('search_product').'%')
 	->get();
 	return view('search',['keywords'=>$data]);
 }
}
