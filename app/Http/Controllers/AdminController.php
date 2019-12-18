<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
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

    function dashboard(){
        return view('admin.dashboard');
       
    }

    function course_insertion(){
        return view('admin.course_insertion');
       
    }

    function course_view(){
        return view('admin.course_view');
       
    }

    function admin_result(){
        return view('admin.result');
       
    }

}
