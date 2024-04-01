<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    //
    function createArtical(Request $req){
        $artical = Articles::create([
            "title" => $req->input('title'),
            "body" => $req->input('body'),
        ]);
        return $artical;
    }

    function getAllArticals(Request $req){
        $articals = Articles::all();
        return $articals;
    }
    function getArtical($id){
        $artical = Articles::find($id);
        return $artical;
    }

    function deleteArtical($id){
        $artical = Articles::find($id);
        $artical->delete();
        return 'artical deleted successful';
    }

    function updateArtical(Request $req, $id){
        $artical = Articles::find($id);
        $artical->title = $req->input('title');
        $artical->body = $req->input('body');
        $artical->save();
        return $artical;
    }
}
