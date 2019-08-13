<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Todo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $todos = Todo::find(Auth::user()->id);
        return view('home', ['todos' => $todos]);
    }
}
