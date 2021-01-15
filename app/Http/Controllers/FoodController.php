<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use App\Models\cart;
use App\Models\review;
use Session;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    //
    public function index()
    {
        $review = review::all();
        return view('review', ['review'=>$review]);
         
    }

    public function reviewShowFunction($id)
    {
        $food = food::find($id);
        $review = review::all()->where('FoodId', $id);
        return view('reviewShowFunction', compact('food', 'review'));
    }


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

    public function reviewStoreFunction(Request $request)
    {
        $this->validate($request, [
            'id' => 'required' ,
            'UserId' => 'required' ,
            'FoodId' => 'required' ,
            'Score' => 'required',
            "Remarks"=>'required'
        ]);
        
        $review = new Review;
        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->rating = $request->input('rating');
        $review->post_id = $request['post_id'];
        $review->save();
        return redirect('/posts')->with('success', 'post created');
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
    function reviewListFunction()
    {
        $user_id=Session::get('user')['id'];
       $food= DB::table('review')
        ->join('food','review.FoodId','=','food.id')
        ->where('review.UserId',$user_id)
        ->select('food.*','review.id as ReviewId')
        ->get();

        return view('reviewlist',['food'=>$food]);
    }
    static function reviewItemFunction()
    {
     $food_id=Session::get('food')['id'];
     return review::where('FoodId',$food_id)->count();
    }
}