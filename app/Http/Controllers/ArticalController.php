<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    // add new artical
    function createArtical(Request $req){
        $artical = Articles::create([
            "title" => $req->input('title'),
            "body" => $req->input('body'),
        ]);
        return $artical;
    }

    // display all articales
    function getAllArticals(Request $req){
        $articals = Articles::all();
        return $articals;
    }

    // display only one articale based on id
    function getArtical($id){
        $artical = Articles::find($id);
        return $artical;
    }

    // delete articale from DB
    function deleteArtical($id){
        $artical = Articles::find($id);
        $artical->delete();
        return 'artical deleted successful';
    }

    // update one articale based on id
    function updateArtical(Request $req, $id){
        $artical = Articles::find($id);
        $artical->title = $req->input('title');
        $artical->body = $req->input('body');
        $artical->save();
        return $artical;
    }
}
