@extends ('layout')
@section('content')

<?php 
use App\Http\Controllers\FoodController;
  FoodController::reviewStoreFunction();
?>

<div class="form-review" id="reviewForm">

<form action = 'FoodController@reviewStoreFunction', method = 'POST'>
    <label>Rating</label>
    <input type="text" id="review" name="review">
    <label>Food ID on your payslip</label>
    <input type="text"id="FoodId" name="FoodId">

    <label>User ID on your payslip</label>
        <input type="text" id="UserId" name="UserId">
<button type='Submit' class ='btn btn-primary' onClick="\foodmenu">Submit</button>
</form>
</div>