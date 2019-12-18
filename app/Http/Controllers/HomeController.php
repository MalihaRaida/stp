<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

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
        $role=Auth::user()->usertype;
        if ($role== 1) {
            return view('admin.dashboard');
        }
        elseif ($role == 2) {
            return view('instructor.dashboard');
        }
        else
        {
            return view('home');
        }
    }
}
