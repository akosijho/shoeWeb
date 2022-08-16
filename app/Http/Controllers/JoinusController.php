<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joinus;
use App\Models\User;


class JoinusController extends Controller
{
    public function save(Request $request)
    {
        $joinus = new Joinus();
        $joinus ->email = $request->input('email');
        $joinus ->pass = $request->input('pass');
        $joinus ->fname = $request->input('fname');
        $joinus ->lname = $request->input('lname');
        $joinus ->bday = $request->input('bday');
        $joinus ->country = $request->get('country');
        $joinus ->gender = $request->input('gender');
        $joinus ->save();
        // return redirect()->back();
        
        // Joinus::create($request->all());

        // return (['message' => 'task was successful']);
    }
}
