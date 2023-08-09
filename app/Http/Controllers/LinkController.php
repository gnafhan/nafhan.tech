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
            "links" =>Link::all()
        ]);
    }
}
