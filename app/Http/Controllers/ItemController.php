<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    function insertView(Request $request){
        // $request->validate([

        // ]);
        return view('insert');
    }

    function insert(Request $request){
        $request->validate([
            // 'sub_categories_id' => ['required', 'numeric'],
            'description' => ['required', 'string', 'max:200'],
            'price' => ['required', 'numeric', 'min:0'],
            'dprice' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'numeric', 'min:1'],
            'name' => ['required', 'string', 'max:20']
        ]);
        
        Item::create([
            'sub_categories_id' => 5,
            'users_id' => 1,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'delivery_price' => $request->dprice,
            'stock' => $request->stock
        ]);

        return redirect('home');
    }

    function delete(Request $request){
        try{
            $id = $request["id"];
            Item::where('id', $id)->delete();
        }catch(Exception $e){
            return json_encode(array("code" => 0,"message" => "Fail Delete"));
        }
        return redirect()->back();
    }

    function updateView(Request $request){
        $item = Item::where('id', $id)->get();
        return view('update', ["item" => $item]);
    }

    function update(Request $request){
        try{
            $id = $request["id"];
            Item::where('id', $id)->update([
                'sub_categories_id' => 5,
                'users_id' => 1,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'delivery_price' => $request->dprice,
                'stock' => $request->stock
            ]);
        }catch(Exception $e){
            return json_encode(array("code" => 0,"message" => "Fail Update"));
        }
        return redirect()->back();
    }
}
