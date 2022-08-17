<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;

class SocialLoginController extends Controller
{
    public function socialLogin(Request $request)
{
    // $provider = "facebook"; // or $request->input('provider_name') for multiple providers
    $provider = $request->input('provider');
    $token = $request->input('access_token');
    // get the provider's user. (In the provider server)
    $providerUser = Socialite::driver($provider)->userFromToken($token);
    // check if access token exists etc..
    // search for a user in our server with the specified provider id and provider name
    $user = User::where('provider_name', $provider)->where('provider_id', $providerUser->id)->first();
    // if there is no record with these data, create a new user
    if($user == null){
        $user = User::insert([
            'name' => $providerUser->name,
            'email' => $providerUser->email,
            'provider_name' => $provider,          
            'provider_id' => $providerUser->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
    // create a token for the user, so they can login
    // $token = $user->createToken(env('APP_NAME'))->accessToken;
    // return the token for usage
    return response()->json([
        'success' => true,
        'token' => $token,
        'name' => $providerUser->name,
        'id' => $providerUser->id,
        'avatar' => $providerUser->avatar_original . "&access_token={$providerUser->token}",
        'email' => $providerUser->email,
    ]);
}
}
