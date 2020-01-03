<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class PasswordsController extends Controller
{
    public function edit() {
        return view('passwords.edit');
    }

    public function update(Request $request) {
        if(!(Hash::check($request->get('current-password'),Auth::user()->password))) {
            return back()->with('change_password_error', '現在のパスワードが間違っています');
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            return back()->with('change_password_error', '現在のパスワードとは異なるパスワードを設定してください');
        }

        $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return back()->with('change_password_success', 'パスワードを変更しました。');
    }

}
