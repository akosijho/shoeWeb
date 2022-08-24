<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    function checkout()
    {
        $checkOut = new Checkout;
        $checkOut->product_id = $request->input('product_id');
        $checkOut->quantity = $request->input('quantity');
        $checkOut->total = $request->input('total');
        return response($checkOut,200);
    }
}
