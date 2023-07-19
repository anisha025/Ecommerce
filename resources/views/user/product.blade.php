@extends('user.layout.main')
@section('content')

<div class="product-list  bg-primary">
    @foreach($products as $product)
    <div class="box">
        <div class="product-card card">
            <img src="{{asset($product->image)}}" alt="image loading" style="width: 100%; height: 220px" />
            <h4>{{$product->name}}</h4>
            <a href="/product-description/{{$product->id}}">Show more details</a>
        </div>
    </div>
    @endforeach

</div>
<div style="padding-top: 10px;"></div>
@endsection