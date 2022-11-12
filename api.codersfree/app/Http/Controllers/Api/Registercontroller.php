<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class Registercontroller extends Controller
{
    public function store(Request $request){

        $request->validate([

            'name' => 'required|string|max:15|min:3',

            'email' => 'required|string|max:255|unique:users',

            'password' => 'required|min:8|confirmed',

        ]);
 
           $user = User::create($request->all());

           return response($user, 200);

       



    }
}
