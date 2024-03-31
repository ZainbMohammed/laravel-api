<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    //
    function createArtical(Request $req){
        $artical = Artical::create([
            "title" => 'AI',
            "body" => 'AI body',
        ]);
        return $artical;
    }

    function getAllArticals(Request $req){
        $articals = Artical::all();
        return $articals;
    }
    function getArtical($id){
        $artical = Artical::find($id);
        return $artical;
    }

    function deleteArtical($id){
        $artical = Artical::find($id);
        $artical->delete();
        return 'artical deleted successful';
    }
}
