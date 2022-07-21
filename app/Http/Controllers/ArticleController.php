<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    function save(Request $request)
    {
   
        $article = new Article();
        $article ->email = $request->input('email');
        $article ->name = $request->input('name');
        $article ->message = $request->input('message');
        $article ->save();
        return redirect()->back();
  
}
}

