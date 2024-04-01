<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    function register(Request $req){
        $user = User::create([
            "name" => $req->input('name'),
            "email" => $req->input('email'),
            "password" => $req->input('password')
        ]);
        return $user;
    }

    function getAllUsers(Request $req){
        $users = User::all();
        return $users;
    }

    function login(Request $req){
        $user = User::where('email',$req->input('email'))->first();
        if(!$user){
            return response()->json(["message" => "user not found"]);
        }
        if(!$user->password != $req->input('password')){
            return response()->json(["message" => "wrong password"]);
        }
        return $user;
    }
}
