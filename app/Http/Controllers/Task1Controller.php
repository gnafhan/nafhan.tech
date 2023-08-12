<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Task1Controller extends Controller
{
    public function index(){
        return view("task1.index", [
            "title" => "Task 1"
        ]);
    }

    public function reason(){
        return view("task1.reason", [
            "title" => "Reason"
        ]);
    }

    public function popularity(){
        return view("task1.popularity", [
            "title" => "Popularity"
        ]);
    }

    public function learn(){
        return view("task1.learn", [
            "title" => "Learn"
        ]);
    }

    public function author(){
        return view("task1.author", [
            "title" => "Author"
        ]);
    }
}
