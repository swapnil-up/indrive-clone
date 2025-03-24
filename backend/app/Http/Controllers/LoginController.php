<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function submit(Request $request){
        //validate number
        $request->validate([
            'phone'=> 'required|numeric|min:10'
        ]);

        //find or create user
        $user = User::firstOrCreate([
            'phone' => $request->phone
        ]);

        if(!$user){
            return response()->json(["message" => "Could not process a user with that number"], 401);
        }

        //send an OTP

        //return response
    }
}
