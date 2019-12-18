<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class StocksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = \Auth::user();
        $posts = $user->stocks()->latest()->paginate(10);
        return view('stocks.index')->with([
            'posts' => $posts, 
            'user' => $user,
        ]);

    }
    public function store(Request $request, $id) 
    {
        \Auth::user()->stock($id);
            return back();
    }

    public function destroy($id)
    {
            \Auth::user()->unstock($id);
            return back();
    }

}
