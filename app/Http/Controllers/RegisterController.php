<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegisterController extends Controller
{
    use ValidatesRequests;

    public function index() {
        return view('auth.register');
    }

    public function store (Request $request) {
        
        //Validation
        $this -> validate ($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:5|max:20|unique:users',
            'email' => 'required|string|email|max:60|unique:users',
            'password' => 'required|string|min:8|max:20',
        ]);
    }
}
