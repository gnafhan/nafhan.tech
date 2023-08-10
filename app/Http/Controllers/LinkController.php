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
//        $validatedData = $request->validate([
//            'title' => 'required|string|max:255',
//            'url' => 'required|url|max:2083',
//        ]);
//
//        Link::create($validatedData);
//
//        return redirect()->route("link")->with("success", "Link successfully added.");

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
}
