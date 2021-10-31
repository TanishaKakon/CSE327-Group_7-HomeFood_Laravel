<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use App\Models\cart;
use App\Models\order;

use Session;
use Illuminate\Support\Facades\DB;



class FoodController extends Controller
{
    //
    function indexFunction(){

    	$data= food::all();

    	return view('foodmenu', ['array'=>$data]);

    }

    function detailFunction($id)
    {
      $data= food::find($id);
      return view('detail',['array'=>$data]);
    }
    function searchFunction(Request $req)
    {
        $data= food::where('FoodName', 'like', '%'.$req->input('query').'%')->get();
    	return view('search',['array'=>$data]);
    }

    function addToCartFunction(Request $req)
    {
        if($req->session()->has('users'))
        {
           $cart= new cart;
           $cart->UserId=$req->session()->get('users')['id'];
           $cart->FoodId=$req->FoodId;
           $cart->save();
           return redirect('/foodmenu');

        }
        else
        {
            return redirect('/login');
        }
    }

    static function cartItemFunction()
    {
     $user_id=Session::get('users')['id'];
     return cart::where('UserId',$user_id)->count();
    }
    function cartListFunction()
    {
        $user_id=Session::get('users')['id'];
       $food= DB::table('cart')
        ->join('food','cart.FoodId','=','food.id')
        ->where('cart.UserId',$user_id)
        ->select('food.*','cart.id as CartId')
        ->get();

        return view('cartlist',['food'=>$food]);
    }
    function removeCartFunction($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= $food= DB::table('cart')
         ->join('food','cart.FoodId','=','food.id')
         ->where('cart.UserId',$user_id)
         ->sum('food.Price');
 
         return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= cart::where('UserId',$user_id)->get();
         foreach($allCart as $cart)
         {
             $order= new order;
             $order->FoodId=$cart['FoodId'];
             $order->user_id=$cart['UserId'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             cart::where('UserId',$user_id)->delete(); 
         }
         $req->input();
         return redirect('/');
    }

    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $order= DB::table('order')
         ->join('food','order.FoodId','=','food.id')
         ->where('order.UserId',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    }


}
?>

