@extends('user.layout.main')
@section('content')

<div class="view-cart-dtls">
    <h1 class="cart-heading">Your Cart</h1>
    @if ($carts->count() > 0)
    <div class="cart-items">
        <table>
            <tr>
                <th>
                    <h3>Items</h3>
                </th>
                <th>
                    <h3>Price</h3>
                </th>
                <th>
                    <h3>Quantity</h3>
                </th>
                <th></th>
            </tr>

            @foreach ($carts as $item)
            <tr>
                <td>
                    <!-- <div class="items"></div> -->
                    <img class="view-cart-img" src="{{asset($item->product->image)}}" alt="" />
                    <h4>{{ $item->product->name }}</h4>
                </td>
                <td>{{ $item->product->price }}</td>
                <td>
                    <input type="number" value="{{ $item->quantity }}" name="quantity" id="quantity" min="1" />
                </td>
                <td>
                    <a href="/cart-delete/{{$item->id}}"> <button class="Delete">Delete</button></a>
                </td>
            </tr>
            @endforeach
            <a href=""> <button class="Delete">Checkout</button></a>
        </table>
    </div>
    @else
    <p>Your cart is empty.</p>
    @endif
</div>

@endsection