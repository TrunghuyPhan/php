@extends('users.layout')
@section('content')
<div class="container">
    <div class="row">
@foreach($all_product as $key => $product)
      <div class="col-md-4">
        <div class="product-item">
          <a href="#"><img src="{{URL::to('/img/'.$product->product_image)}}" alt=""></a>
          <div class="down-content">
            <div class="title">
              <a href="#">
                <h4>{{$product->product_name}}</h4>
              </a>
            </div>
           <div class="price">
             <h6>{{$product->product_price/1000}}.000VNĐ</h6>
           </div>
            
            <ul class="stars">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
            </ul>
            <span>Reviews (24)</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>
      
@endsection