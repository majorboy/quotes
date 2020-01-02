<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Auth;
use App\Http\Requests\UserRequest;


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

    public function update(UserRequest $request){
        //プロフィール更新処理
        $user = \Auth::user();
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();

        //アバター更新処理
        if(isset($request['avatar'])){
            if($user->has_avatar()) {
                $user->media[0]->delete();
            }
            $user->addMediaFromRequest('avatar')
            ->toMediaCollection('avatars');
        }
        return back()->with('flash_message', 'プロフィールを更新しました');
    }
    public function pass(){
        return view('users.pass');
    }
}

