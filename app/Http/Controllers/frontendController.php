<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\orderDescription;
use App\Models\Product;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function category()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }
    public function product()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product', compact('products', 'categories'));
    }
    public function order()
    {
        $orders = Order::all();
        return view('admin.order', compact('orders'));
    }

    public function showproduct()
    {
        $products = Product::all();
        return view('user.product', compact('products'));
    }
    public function productdesc($id)
    {
        $product = Product::find($id);
        return view('user.productdescription', compact('product'));
    }

    public function search(Request $request)
    {
        $products = product::where('name', 'like', '%' . $request->search . '%')->orwhere('description', 'like', '%' . $request->search . '%')->get();
        return view('user.product', compact('products'));
    }

    public function checkout()
    {
        return view('user.checkout');
    }
    public function orderdetails()
    {
        $orderdescriptions = orderDescription::all();
        $products = Product::all();
        return view('user.orderdetails', compact('orderdescriptions', 'products'));
    }
}
