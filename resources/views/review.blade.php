@extends ('layout')
@section('content')

<?php 
use App\Http\Controllers\FoodController;
  $total=FoodController::reviewItemFunction();
?>

<h1>Review Details</h1>
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
        <button type="button" class="button1" onclick="/createreview">Write a review</button>
    @endsection