@extends('layouts.instructor')
@section('main-content')

<section class="content-header">
    <h1>
        Result
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
                        	
                            <th width="10%">SID</th>
                            <th width="25%">Student Name</th>
                            <th width="12%">Department</th>
                            <th width="13%">Semester</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class='box box-default box-solid'>
    <div class='box-header bg-navy-active' style="text-align: center;"><h5 class='box-title'>Result Sheet</h5></div>
    <div class='box-body' id="adminresult">
        <div >
                <table class="table table-bordered table-condensed">
                
                <tr>
                    
                    <th>C Code</th>
                    <th>Course Name</th>
                    <th>Credit</th>
                    <th>Grade</th>
                    <th>Cur Teacher</th>

                </tr>
               <tfoot>
                             <tr>
                                 <th colspan="3" style="text-align:right">CGPA</th>
                                 <th></th>
                             </tr>
                             </tfoot>
                </table>
        </div>
    </div>
</div>
@endsection