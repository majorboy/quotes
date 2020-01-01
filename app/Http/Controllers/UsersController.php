<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function show(User $user){
        $posts = $user->posts()->latest()->paginate(10);
        return view('users.show')->with([
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    public function edit(User $user){
        return view('users.edit');
    }

    public function pass(){
        return view('users.pass');
    }
}

