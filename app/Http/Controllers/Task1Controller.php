<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Task1Controller extends Controller
{
    public function index(){
        return view("task1", [
            "title" => "Task 1"
        ]);
    }
}
