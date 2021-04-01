<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Cart;
use Session;

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

 function addToCart(Request $req){
 	if($req->session()->has('user')){
 		$cart = new Cart;
 		$cart->product_id = $req->product_id;
 		$cart->user_id = $req->Session()->get('user')['id'];
 		$cart->save();
 		return redirect('product');
 	}else{
 		return redirect('login');
 	}
 }

  static function cartItem(){
 	$userID = Session::get('user')['id'];
 	return Cart::Where('user_id',$userID)->count();

 }
 	public function cartList(){
 		$userID = Session::get('user')['id'];
 		$data = DB::table('carts')
 				->join('products','carts.product_id','=','products.id')
 				->where('user_id',$userID)
 				->select('products.*','carts.id as cart_id')
 				->get();
 				return view('cartlist',['items'=>$data]);
 	}

 	function removeItem($id){
 		Cart::destroy($id);
 		return redirect('cartList');
 	}
}
