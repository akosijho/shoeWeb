<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    function wishlist()
    {
        return response()->json(Wishlist::all(), 200);
    }
}
