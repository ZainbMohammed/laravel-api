<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    function register(Request $req){
        $user = User::create([
            "name" => 'fatima',
            "email" => 'fa@gmail.com',
            "password" => '1234'
        ]);
        return $user;
    }
}
