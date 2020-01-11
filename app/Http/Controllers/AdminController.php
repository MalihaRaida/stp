<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Redirector;
use Auth;
use Carbon\Carbon;

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
            $mon=Carbon::now()->month;
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
                    if($mon<6){
                        $course->session="Winter";
                    }
                    else{
                        $course->session="Spring";
                    }
                    $course->save();
                }
            }
            
            Session::flash('success','Successfully Saved!');           
            return redirect('admin/course_insertion');
        }else{
            return view('layouts.401');
        }
    }

    function update_course(Request $request)
    {
        $course =\App\course_tech::find($request->index);
        $course->course_name = $request->course_name;
        $course->course_dept = $request->dept;
        $course->semester = $request->semester;
        $course->credit = $request->credit;
        $course->save();
          return redirect('admin/course_view')->with('success','Successfully Updated!');
    }

    function course_view(){
        $user_id=Auth::user()->id;
        $year=now()->year;
        $mon=Carbon::now()->month;
        if($mon<6){
            $detail = \App\course_tech::where('teacher_id',$user_id)->where('teach_year',$year)->where('session',"Winter")->get();
        }
        else{
            $detail = \App\course_tech::where('teacher_id',$user_id)->where('teach_year',$year)->where('session',"Spring")->get();
        }
        
        return view('admin.course_view',compact('detail'));
       
    }

     function edit_course_view(){
        if(request()->ajax()){
            $no = request()->all();
            $detail = \App\course_tech::where('id',$no)->get();
            return view('admin.ajax.edit_course_view',compact('detail'));
        }
    }



    function destroy($id)
    {
        $course=\App\course_tech::find($id);
        $dept = \App\course_tech::where('id',$id)->value('course_dept');
        $code = \App\course_tech::where('id',$id)->value('course_code');
        $sem = \App\course_tech::where('id',$id)->value('semester');
        $year = \App\course_tech::where('id',$id)->value('teach_year');
        $cnt = \App\course_registration::join('users','users.id','course_registration.id')->where('users.dept',$dept)->where('course_registration.course',$code)->where('course_registration.semester',$sem)->where('course_registration.enroll_year',$year)->count();
        if($cnt== 0){
            $course->delete();
            return redirect('admin/course_view')->with('success','Successfully Deleted!');
        }
        else{
            return redirect('admin/course_view')->with('error','Course has been already occpied!');
        }        
    }


     function view_course_view(){
            if(request()->ajax()){
            $no = request()->all();
            $dept = \App\course_tech::where('id',$no)->value('course_dept');
            $code = \App\course_tech::where('id',$no)->value('course_code');
            $sem = \App\course_tech::where('id',$no)->value('semester');
            $year = \App\course_tech::where('id',$no)->value('teach_year');
            $detail = \App\course_registration::join('users','users.id','course_registration.id')->where('users.dept',$dept)->where('course_registration.course',$code)->where('course_registration.semester',$sem)->where('course_registration.enroll_year',$year)->get();

            return view('admin.ajax.view_course_view',compact('detail','code'));
        }
    }

    function admin_result(){
        $user_id=Auth::user()->id;
        $year=now()->year;
        $mon=Carbon::now()->month;

        if($mon<6){
            $detail = \App\course_tech::where('teacher_id',$user_id)->where('teach_year',$year)->where('session',"Winter")->get();
        }
        else{
            $detail = \App\course_tech::where('teacher_id',$user_id)->where('teach_year',$year)->where('session',"Spring")->get();
        }
        return view('admin.result',compact('detail'));
       
    }

function display_result(){
    if(request()->ajax()){
            $no = request()->all();
            $dept = \App\course_tech::where('course_code',$no)->value('course_dept');

            $sem = \App\course_tech::where('course_code',$no)->value('semester');
            $year = \App\course_tech::where('course_code',$no)->value('teach_year');
            $detail = \App\course_registration::join('users','users.id','course_registration.id')->where('users.dept',$dept)->where('course_registration.course',$no)->where('course_registration.semester',$sem)->where('course_registration.enroll_year',$year)->get();

        }
        return view('admin.ajax.display_result',compact('detail'));
}

function save_result(Request $request)
{
    if(Auth::user()->usertype == 1){
            $mon=Carbon::now()->month;
            $user_id=Auth::user()->id;
            $year=now()->year;
            for($x=0;$x<=count($request->attendence);$x++){
                if(array_key_exists($x, $request->attendence)){
                    $result = new \App\result;
                    $result->attend = $request->attendence[$x];
                    $result->q1 = $request->q1[$x];
                    $result->q2 = $request->q2[$x];
                    $result->q3 = $request->q3[$x];
                    $result->q4 = $request->q4[$x];
                    $result->mid = $request->mid[$x];
                    $result->final = $request->final[$x];
                    $result->grade = $request->grade[$x];

                    $result->course = $request->course;
                    $result->student_id = $request->sid[$x];
                    $result->result_year = $year;
                    $result->semester = $request->semester;
                    $result->department = $request->department;
                    if($mon<6){
                        $result->session="Winter";
                         $detail = \App\course_tech::where('teacher_id',$user_id)->where('teach_year',$year)->where('session',"Winter")->get();
                    }
                    else{
                        $result->session="Spring";
                          $detail = \App\course_tech::where('teacher_id',$user_id)->where('teach_year',$year)->where('session',"Spring")->get();
                    }
                    $result->save();
                }
            }
                      
           return view('admin.result',compact('detail'));
        }else{
            return view('layouts.401');
        }
}

}
