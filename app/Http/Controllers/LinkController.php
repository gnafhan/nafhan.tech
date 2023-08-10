<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(){
        return view("link", [
            "title" => "Link",
            "links" =>Link::latest()->get()
        ]);

    }

    public function create(Request $request){
        if ($request['pin']== null ){
            if ($request['title'] == null){
                $request['title'] = fake()->emoji;
            }

            Link::create([
                "title"=> $request["title"],
                "url"=>$request['url']
            ]);

            return view("link", [
                "title" => "Link",
                "links" =>Link::latest()->get()
            ]);
        }

        $pin = $request['pin'];

        if ($pin == "hapusbos"){
            Link::all()->map->delete();
            return view("link", [
                "title" => "Link",
                "links" =>Link::latest()->get()
            ]);
        }


    }

    public function delete(Request $request){
        return view("link", [
            "title" => $request["pin"],
            "links" =>Link::latest()->get()
        ]);
    }
}
