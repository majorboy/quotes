<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordsController extends Controller
{
    function edit() {
        return view('passwords.edit');
    }
}
