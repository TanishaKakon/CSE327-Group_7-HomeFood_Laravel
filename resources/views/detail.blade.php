@extends('layout')
@section("content")

<?php 
use App\Http\Controllers\FoodController;
$total=0;
if(Session::has('food'))
{
  $total= FoodController::reviewItemFunction();
}
?>

<div class="container">
	<div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$array['FoodImage']}}">
    </div>
    <div class="col-sm-6">
    $array['id']
      <a href="/foodmenu">Go Back</a>
      <h2>{{$array['FoodName']}}</h2>
      <h4>{{$array['FoodDetails']}}</h4>
      <h4>Resturant: {{$array['ResturantName']}}</h4>
      <h4>Type: {{$array['FoodType']}}</h4>
      <h5>Status: {{$array['FoodStatus']}}</h5><br>
      <div class="clearfix"></div>
			<div class="review">
         <i class="fa fa-star" aria-hidden="true" data-index="0" color="yellow"></i>
        <i class="fa fa-star" aria-hidden="true"  data-index="1" color="yellow"></i>
        <i class="fa fa-star" aria-hidden="true"  data-index="2" color="yellow"></i>
        <i class="fa fa-star" aria-hidden="true"  data-index="3" color="yellow"></i>
        <i class="fa fa-star" aria-hidden="true"  data-index="4" color="yellow"></i>
        <div class="clearfix"></div>
        <a href="/review" class="count-review">Review Details</a>
        <a href="/review" class="count-review"> Reviews (5)</a>
      </div><br><br>
      <h3>Price: {{$array['Price']}}</h3><br><br>
    <form action="/add_to_product" method="POST">
      @csrf
      <input type="hidden" name="FoodId" value={{$array['id']}}>
      <button class="btn btn-primary">Add to Cart</button>
</form>  
      <br><br>
      <button class="btn btn-success">Order</button>
      <br><br>
    

    </div>
  </div>
</div>
@endsection