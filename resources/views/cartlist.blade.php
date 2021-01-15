@extends('layout')
@section("content")
<div class="custom-food">
     <div class="col-sm-10">
        <div class="menu-wrapper">
            <h4>Result for Foods</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
            @foreach($food as $item)
            <div class=" row searched-item cart-list-divider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="menu-image" src="{{$item->FoodImage}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->FoodName}}</h2>
                      <h5>{{$item->FoodDetails}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/removecart/{{$item->CartId}}" class="btn btn-warning" >Remove to Cart</a>
             </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>

     </div>
</div>
@endsection 
© 2021 GitHub, Inc.