<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\orderDescription;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->name = $request->name;
        $order->address = $request->address;
        $order->contact = $request->contact;
        $order->message = $request->message;


        $cart = Cart::where('user_id', auth()->user()->id)->get();
        $total = 0;
        foreach ($cart as $c) {
            $product = Product::find($c->product_id);
            $total = $total + ((float)$product->price * (int)$c->quantity);
        }
        $order->totalprice = $total;
        $order->status = "Ordered";
        $order->user_id = $request->user()->id;
        $order->save();


        foreach ($cart as $c) {
            $product = product::find($c->product_id);
            $orderDetails = new orderDescription();
            $orderDetails->order_id = $order->id;
            $orderDetails->product_id = $c->product_id;
            $orderDetails->quantity = $c->quantity;
            $orderDetails->price = $product->price;
            $orderDetails->save();


            $c->delete();
        }

        return redirect('/orderdetails');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
