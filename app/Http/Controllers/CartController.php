<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use DB;

class CartController extends Controller
{
    function addToCart(Request $request)
    {
        $insert = new Cart;
        $insert->product_name = $request->input('getname');
        $insert->product_image = $request->input('getprice');
        $insert->user_id = $request->input('user_id');
        $insert->save();
        return response($insert);
    }

    function mycart($user_id)
    {
        $list = Cart::where('user_id','=',$user_id)->get();
        return response()->json($list,200);
    }

    
    function addquantity($product_name)
    {
                DB::table('carts')
                ->where('product_name', $product_name)
                ->update([
            'quantity' => DB::raw('quantity + 1'),
        ]);
    }


    function subtractquantity($product_name)
    {
                DB::table('carts')
                ->where('product_name', $product_name)
                ->update([
            'quantity' => DB::raw('quantity - 1'),
        ]);
    }
}
