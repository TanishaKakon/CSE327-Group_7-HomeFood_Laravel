@extends('layout')
@section("content")
<div class="custom-food">
 <div class="col-sm-4">
  <a href="#">Filter</a>
</div>
<div class="col-sm-4">
<div class="menu-wrapper">
  <h4> Searched Item </h4><br>
  @foreach ($array as $item)
   <div class="searched-item">
    <a href="detail/{{$item['id']}}">
      <img class="menu-image" src="{{$item['FoodImage']}}" >
      <div class="">
        <h2>{{$item['FoodName']}}</h2>
        <h5>{{$item['FoodDetails']}}</h5>
        
      </div>
  </a>
    </div>
    @endforeach
 </div>
  </div>
</div>
@endsection