<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
