@extends('layouts.admin')
@section('main-content')

<section class="content-header">
    <h1>
        View Course
    </h1>
</section>


<div class="content container-fluid">
    <div class="box box-default">
        <div class="box-header"><i ></i>
            <h5 class='box-title'></h5>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        	<th width="5%"></th>
                            <th width="10%">C Code</th>
                            <th width="25%">Course Title</th>
                            <th width="12%">Department</th>
                            <th width="13%">Semester</th>
                            <th width="10%">Credit</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                     ?>                  
                        @foreach($detail as $details)
                        <tr> 
                        <td>{{$no}}</td>
                        <td>{{$details->course_code}}</td>
                        <td>{{$details->course_name}}</td>
                        <td>{{$details->course_dept}}</td>
                        <td>{{$details->semester}}</td>
                        <td>{{$details->credit}}</td>
                        <td><button type="button" class="btn btn-primary waves-light" onclick="view_course('{{$details->course_code}}','{{$details->semester}}','{{$details->course_dept}}')">View</button></td>
                        <td><button type="button" class="btn btn-warning waves-light"onclick="edit_course('{{$details->id}}')">Edit</button></td>
                        <td><button type="button" class="btn btn-danger waves-light">Delete</button></td>
                    </tr>
                    <?php
                    $no++;
                    ?>
                   @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="displayviewmodal"></div>
<div id="displayeditmodal"></div>
@endsection
@section('footer-script')
<script>
    function view_course(code,dept,sem){
        var array={};
        array['code']=code;
        array['dept']=dept;
        array['sem']=sem;
        $.ajax({
            type:"GET",
            url:"/ajax/admin/view_course_view",
            data:array,
           success: function(data){
                $('#displayviewmodal').html(data).fadeIn();
                $('#Modal1').modal('toggle');
            },error: function(){
                toastr.error('Something Went Wrong!','Message!');
            }
        })
    }


    function edit_course(id){
        var array={};
        array['id']=id;
        $.ajax({
            type:"GET",
            url:"/ajax/admin/edit_course_view",
            data:array,
           success: function(data){
                $('#displayeditmodal').html(data).fadeIn();
                $('#Modal2').modal('toggle');
            },error: function(){
                toastr.error('Something Went Wrong!','Message!');
            }
        })
    }	
</script>
@endsection