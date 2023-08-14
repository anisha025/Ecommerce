<?php

namespace App\Http\Controllers;

use App\Models\orderDescription;
use Illuminate\Http\Request;

class OrderDescriptionController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(orderDescription $orderDescription)
    {
        $user = auth()->user();
        $orderdescriptions = orderDescription::where('user_id', $user->id)->get();
        return view('user.orderdetails', ['orderdescriptions' => $orderdescriptions]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orderDescription $orderDescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, orderDescription $orderDescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orderDescription $orderDescription)
    {
        //
    }
}
