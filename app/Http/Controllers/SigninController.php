<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signin;

class SigninController extends Controller
{
    function save(Request $request)
    {
        

        $email = $request->input('email');
        $pass = $request->input('pass');
        $signin = Signin::select('email','pass')
        ->where('email','=', $email)
        ->where('pass','=',$pass)
        ->get();
        if($signin)
        {
            return response->json(['message' => 'Ok KAAYU']);
        }
        else
        {
            return response->json(['message' => 'di pwede na']);
        }

        
        
        

        

        // $signin ->email = $request->input('email');
        // $signin ->pass = $request->input('pass');
        // $signin ->save();

    }
}
