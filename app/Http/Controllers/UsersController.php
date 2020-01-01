<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Auth;


class UsersController extends Controller
{
    public function show(User $user){
        $posts = $user->posts()->latest()->paginate(10);
        return view('users.show')->with([
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    public function edit(){
        $user = \Auth::user();
        return view('users.edit')->with('user',$user);
    }

    public function update(Request $request){
        $user = \Auth::user();
        $form = $request->all();

        unset($form['_token']);

        $user->fill($form)->save();

        return back()->with('flash_message', 'プロフィールを更新しました');
    }

    public function pass(){
        return view('users.pass');
    }
}

