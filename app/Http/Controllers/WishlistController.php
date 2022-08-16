<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use DB;

class WishlistController extends Controller
{
    
    function addwishlist(Request $request)
    {
        $insert = new Wishlist;
        $insert->product_name = $request->input('getname');
        $insert->product_image = $request->input('getprice');
        $insert->wishlist_id = $request->input('user_id');
        $insert->save();
        return redirect()->back();
    }

    function mywishlist($user_id)
    {
        $list = Wishlist::where('user_id','=',$user_id)->get();
        return view('addwishlist', compact('list'));
    }
}
