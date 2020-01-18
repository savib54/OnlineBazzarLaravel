<?php

namespace App\Http\Controllers;
use App\post;
use App\User;

use Illuminate\Http\Request;

class searchcontroller extends Controller
{
    public function search(Request $request){
    $query=$request->input('query');
        $results=Post::where('product_name','like',"%$query%")->get();
        $all=User::all();
        return view('search.result',compact('request','results','all'));
    }
}
