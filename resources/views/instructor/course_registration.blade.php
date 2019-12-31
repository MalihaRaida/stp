@extends('layouts.instructor')
@section('main-content')
<?php  
use Carbon\Carbon;
$mon=Carbon::now()->month;
?>

<section class="content-header">
    <h1>
        Course Registration
    </h1>
</section>


<div class="container-fluid" style="margin-top: 15px;">
    <div class="box box-default">
        <div class="box-header">
            
        </div>
        <div class="box-body">
            <div class="row">
            	<div class="col-sm-3">
                    <div class="form-group" id="displaysid">
                        <label>SID</label>
                        <input type="text" class="form-control" name="sid[]" id="sid">
                        
                </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group" id="displaydept">
                        <label>Department</label>
                        <select class="select2 form-control" id="dept">
                                    <option>Please Select</option>
                                    <option value="CSE">CSE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="MCE">MCE</option>
                                    <option value="CEE">CEE</option>
                        </select>
                        
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div class="form-group" id="displaysemester">
                        <label>Semester</label>
							<select class="select2 form-control" id="sem" name="sem[]">
                                    <option>Please Select</option>
                                    @if ($mon<6){
                                    <option value="1st Semester">1st Semester</option>
                                    <option value="3rd Semester">3rd Semester</option>
                                    <option value="5th Semester">5th Semester</option>
                                    <option value="7th Semester">7th Semester</option>
                                }
                                    @else {
                                    <option value="2nd Semester">2nd Semester</option>                                    
                                    <option value="4th Semester">4th Semester</option>                                    
                                    <option value="6th Semester">6th Semester</option>
                                    <option value="8th Semester">8th Semester</option>
                                }
                                @endif
                         </select>
                    </div>
                </div>

                
                <div class="col-sm-3" id="displaysearch">
                    <label></label>
                    <button class='btn btn-flat btn-primary btn-block' onclick='display_course(sid.value,dept.value,sem.value)'>Start Loading</button>
                </div>
            </div>
        </div>
    </div>
    <div class=row>
    	<div class='col-sm-3'></div>
        <div class='col-sm-6' id='displaycourses'></div>
    </div>
</div>
@endsection
@section('footer-script')
<script>
    function display_course(sid,dept,sem){
        var array={};
        array['sid']=sid;
        array['dept']=dept;
        array['sem']=sem;
        $.ajax({ 
            type:"GET",
            url:"/ajax/instructor/display_course_registration",
            data:array,
           success: function(data){
                $('#displaycourses').html(data).fadeIn();
            }
        })
    }	
</script>
@endsection