<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(User $user)
    {
        return view('dashboard', [
            'user' => $user,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
}
