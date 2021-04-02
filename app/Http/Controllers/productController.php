<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Cart;
use App\User;
use App\Order;
use Session;
use Hash;

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
 	function register(Request $req){
 			$user = new User;
 			$user->name = $req->name;
 			$user->email = $req->email;
 			$user->password = Hash::make($req->password);
 			$req->session()->flash('msg','Registration done Successfully');
 			$user->save();
 			 return redirect('login');
 			 // ->with('msg','Registration done Successfully');

 	}
 	static function total_price(){
 		$userID = Session::get('user')['id'];

 		return DB::table('carts')
 				->join('products','products.id','=','carts.product_id')
 				->where('user_id',$userID)
 				->sum('products.price');
 		// return Cart::where('price',$userID)->sum('carts.price');
 	}

 	public function order_now(){
 		$userID = Session::get('user')['id'];
 		$Amount = DB::table('carts')
 				->join('products','products.id','=','carts.product_id')
 				->where('user_id',$userID)
 				->sum('products.price');
 			return view('order_now',['amounts'=>$Amount]);

 	}
 	function proceed_order(Request $req){
 		$userID = Session::get('user')['id'];
 		$AllCartData = Cart::where('user_id',$userID)->get();
 		foreach ($AllCartData as $data) {
 			$order = new Order;
 			$order->user_id = $userID;
 			$order->product_id = $data->product_id;
 			$order->status = 'Pending';
 			$order->payment = $req->input('payment');
 			$order->amount = $req->input('amount');
 			$order->address = $req->input('address');
 			$order->save();
 			Cart::where('user_id',$userID)->delete();
 		}

 		return redirect('product');
 	}

 	public function my_orders(){
 		$userID = Session::get('user')['id'];

 		$orders =  DB::table('order')
 		->where('user_id',$userID)
 		->join('products','products.id','=','order.product_id')
 		->get();
 		return view('my_orders',['orders'=>$orders]);	
 	}
}
