@extends('layout')
@section("content")

<?php 
use App\Http\Controllers\FoodController;
  FoodController::reviewListFunction();
  $total=FoodController::reviewItemFunction();
?>
<div class="custom-food">
     <div class="col-sm-10">
        <div class="menu-wrapper">
            <h4>Review Details</h4>
            @foreach($food as $item)
            <div class=" row searched-item cart-list-divider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="menu-image" src="{{$item->FoodImage}}">
                  </a>
             </div>
             <div class="col-sm-6">
<div class="clearfix"></div>
			<div class="review">
         <i class="fa fa-star" aria-hidden="true" data-index="0" color="yellow"></i>
        <i class="fa fa-star" aria-hidden="true"  data-index="1" color="yellow"></i>
        <i class="fa fa-star" aria-hidden="true"  data-index="2" color="yellow"></i>
        <i class="fa fa-star" aria-hidden="true"  data-index="3" color="yellow"></i>
        <i class="fa fa-star" aria-hidden="true"  data-index="4" color="yellow"></i>
        <div class="clearfix"></div>
        <a href="/reviewlist" class="count-review">5 Reviews</a>
        <a href="/reviewlist" class="count-review">Reviews({{$total}})</a>
      </div><br><br>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->FoodName}}</h2>
                      <h5>{{$item->FoodDetails}}</h5>
                      <h5>{{$item->ReviewId}}</h5>
                      <h5>{{$item->$user_id}}</h5>
                    </div>
             </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>

     </div>
</div>
@endsection 