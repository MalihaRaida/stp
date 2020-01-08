@extends('layouts.admin')
@section('main-content')
<?php  
use Carbon\Carbon;
$mon=Carbon::now()->month;
?>


<section class="content-header">
    <h1>
        Result
    </h1>
</section>


<div class="container-fluid" style="margin-top: 10px;">
    <div class="box box-default">
        <div class="box-header">
        	<h4>
        		<label>Course</label>
        	</h4>
            
        </div>
        	<div class="box-body">

            	<div class="row">

            		<div class="col-sm-4">
                    <div class="form-group" id="displaydept">
                       
                        <select class="select2 form-control" id="code">
                        	
                                    <option>Please Select</option>
                                    @foreach($detail as $details)
                                    <option>{{$details->course_code}}</option>
                                    @endforeach 
                        </select>
                        
                    </div>
                </div>

                <div class="col-sm-4" id="displaysearch">
                    <button class='btn btn-flat btn-primary btn-block' onclick='admin_result(code.value)'>Start Loading</button>
                </div>
            	</div>
        	</div>
    </div>
    	
        <div id='displayresult'></div>
</div>
@endsection
@section('footer-script')
<script>
    function admin_result(code){
        var array={};
        array['code']=code;
        $.ajax({
            type:"GET",
            url:"/ajax/admin/display_result",
            data:array,
           success: function(data){
                $('#displayresult').html(data).fadeIn();
            }
        })
    }	
</script>
@endsection