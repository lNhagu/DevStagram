<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use ValidatesRequests;

    public function index() {
        return view('auth.register');
    }

    public function store (Request $request) {
        
        //Modify the request
        $request-> request-> add([
            'username' => Str::slug($request->username),
        ]);

        //Validation
        $this -> validate ($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:5|max:20|unique:users',
            'email' => 'required|string|email|max:60|unique:users',
            'password' => 'required|string|min:8|max:20|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        //authenticate the user
        Auth::attempt($request->only('email', 'password')); 

        //redirect
        return redirect()->route('posts.index');



    }
}
