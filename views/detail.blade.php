@extends('layout')
@section("content")
<div class="container">
	<div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$array['FoodImage']}}">
    </div>
    <div class="col-sm-6">
      <a href="/foodmenu">Go Back</a>
      <h2>{{$array['FoodName']}}</h2>
      <h4>{{$array['FoodDetails']}}</h4>
      <h4>Resturant: {{$array['ResturantName']}}</h4>
      <h4>Type: {{$array['FoodType']}}</h4>
      <h5>Status: {{$array['FoodStatus']}}</h5><br>
      <h3>Price: {{$array['Price']}}</h3><br><br>

      <button class="btn btn-primary">Add to Cart</button>
      <br><br>
      <button class="btn btn-success">Order</button>
      <br><br>


    </div>
  </div>
</div>
@endsection