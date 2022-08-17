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
        $insert->product_id = $request->input('product_id');
        $insert->user_id = $request->input('user_id');
        $insert->save();
        return response()->json($insert,200);
    }

   

    function mywishlist($user_id)
    {

            $users = DB::table('products')
            ->join('wishlists', 'products.id', '=', 'wishlists.product_id')
            ->select('products.name','products.price','products.images')
            ->where('wishlists.user_id', '=' ,$user_id)
            ->get();
            return response()->json($users, 200);
          
    }
}
