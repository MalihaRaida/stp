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
        $course->delete();
        return redirect('admin/course_view')->with('success','Successfully Deleted!');
    }


     function view_course_view(){
            if(request()->ajax()){
            $code = request()->code;
            $sem = request()->sem;
            $dept = request()->dept;
            $year=now()->year;
            $mon=Carbon::now()->month;
            $detail = \App\course_registration::join('users','users.id','course_registration.id')->where('users.dept',$dept)->where('course_registration.course',$code)->where('course_registration.semester',$sem)->where('course_registration.enroll_year',$year)->get();

            return view('admin.ajax.view_course_view',compact('detail','code'));
        }
    }

    function admin_result(){
        return view('admin.result');
       
    }



}
