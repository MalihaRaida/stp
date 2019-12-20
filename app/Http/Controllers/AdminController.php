<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

   function add_course(Request $request){

        if(Auth::user()->usertype == 1){
            $user_id=Auth::user()->id;
            for($x=0;$x<=count($request->c_code);$x++){
                if(array_key_exists($x, $request->c_code)){
                    $course = new \App\course_tech;
                    $course->course_code = $request->c_code[$x];
                    $course->course_name = $request->c_name[$x];
                    $course->course_dept = $request->dept[$x];
                    $course->semester = $request->sem[$x];
                    $course->credit = $request->credit[$x];
                    $course->teacher_id = $user_id;
                    $course->teach_year = now()->year;
                    $course->save();
                }
            }
            
            Session::flash('success','Successfully Saved!');           
            return redirect('admin/course_insertion');
        }else{
            return view('layouts.401');
        }
    }

    function course_view(){
        return view('admin.course_view');
       
    }

    function admin_result(){
        return view('admin.result');
       
    }

}
