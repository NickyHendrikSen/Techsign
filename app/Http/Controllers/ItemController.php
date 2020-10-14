<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function get(){
        
        // $items = DB::table('items')->get();
        // return view('home', ['items' => $items]);
    }
    function insertView(){
        return view('insertItem');
    }
}
