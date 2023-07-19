<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
}
