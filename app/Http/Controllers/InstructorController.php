<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;

use Carbon\Carbon;

class InstructorController extends Controller
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
        return view('instructor.dashboard');
       
    }

    function view_course_registration(){
        return view('instructor.course_registration');
       
    }

    function display_course(){
        if(request()->ajax()){
            $user_id=Auth::user()->id;
            $sid = request()->sid;
            $dept = request()->dept;
            $sem = request()->sem;
            $year=now()->year;
            $mon=Carbon::now()->month;
            if($mon<6){
            $detail = \App\course_tech::where('course_dept',$dept)->where('semester',$sem)->where('teach_year',$year)->where('session',"Winter")->get();
            }
            else{
            $detail = \App\course_tech::where('course_dept',$dept)->where('semester',$sem)->where('teach_year',$year)->where('session',"Spring")->get();
            }
            return view('instructor.ajax.display_course_registration',compact('detail','user_id','sid','sem','year'));
        }
    }

    public function course_registration(Request $request)
    {
         if(Auth::user()->usertype == 2){
            $user_id=Auth::user()->id;
            for($x=0;$x<=count($request->course_code);$x++){
                 if(array_key_exists($x, $request->course_code)){
                    $course_reg = new \App\course_registration;
                    $course_reg->course = $request->course_code[$x];
                    $course_reg->id=$user_id;
                    $course_reg->student_id=$request->sid;
                    $course_reg->semester = $request->sem;
                    $course_reg->enroll_year = now()->year;
                    $course_reg->save();
    }
            }
            
            Session::flash('success','Successfully Saved!');           
            return redirect('instructor/course_registration');
        }
    }

    function instructor_result(){
        return view('instructor.result');
       
    }

}
