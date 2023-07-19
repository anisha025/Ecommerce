@extends('user.layout.main')
@section('content')
<div class="container" id="product-section" style="padding-top: 30px; padding-bottom:30px;">
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset($product->image)}}" alt="" width="400px" height="350px" />
        </div>
        <div class="col-md-6">
            <h2>{{$product->name}}</h2>
            <p>{{$product->category['name']}}</p>
            <p> <strong> Description:</strong>{{$product->description}}</p>

            <div style="display: flex;">
                <div> <button type="button" class="btn btn-dark"> Buy Now</button></div>
                <div style="padding-left: 20px;"><button type="button" class="btn btn-dark"> Add to Cart</button></div>
            </div>
            <!-- <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-dark"> Buy</button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-dark"> Add to Cart</button>
                </div>
            </div> -->
        </div>
    </div><!-- end row -->
</div>

@endsection