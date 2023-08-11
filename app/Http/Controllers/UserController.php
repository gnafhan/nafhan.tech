<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('register',[
            'title'=> 'Register'
        ]);
    }

    public function store(Request $request){
//        dd($request);

        $validated= $request->validate([
            'name' => "required|string|max:255",
            'email'=> "required|email:dns|unique:users",
            'username'=> "required|string|unique:users|max:100|min:3",
            'password'=> "required|max:255|min:6",
        ]);
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect('/')->with('success', 'Account created successfully');
    }
}
