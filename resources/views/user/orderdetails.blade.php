@extends('user.layout.main')
@section('content')


<style>
    .order-list {
        margin: 20px;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .heading-order {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .table-container {
        margin-top: 10px;
    }

    .OrderTable {
        width: 100%;
        border-collapse: collapse;
    }

    .OrderTable th {
        text-align: left;
        background-color: black;
        color: white;
        padding: 10px;
    }

    .OrderTable td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    .OrderTable td img {
        width: 100px;
        height: 100px;
        margin-right: 20px;
        float: left;
    }

    .OrderTable td h4 {
        margin-top: 30px;
        font-size: 18px;
    }
</style>


<div class="w3-container" style="margin-top: 50px">
    <h1>Your Order Details</h1>
    <div class=" w3-animate-zoom w3-padding w3-round student-detail-table">
        <table class="OrderTable">
            <tr>
                <th>Order ID</th>
                <th>Items</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            @foreach($orderdescriptions as $od)
            <tr>
                <td style="font-weight: bold">{{$od->id}}</td>
                <td>

                    <h4>{{$od->product['name']}}</h4>
                    <img class="view-cart-img" src="{{asset($od->product['image'])}}" alt="" />

                    <!-- @foreach($products as $product)
                    <img class="view-cart-img" src="{{asset($product->image)}}" alt="" />
                    <h4 value="{{$product->id}}">{{$product->name}}</h4>
                    @endforeach -->
                </td>

                <td>{{$od->quantity}}</td>
                <td>{{$od->price}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection