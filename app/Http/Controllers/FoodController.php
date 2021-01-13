<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\food;


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
}
