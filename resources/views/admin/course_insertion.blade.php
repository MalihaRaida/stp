@extends('layouts.admin')
@section('main-content')

@if(Session::has('success'))
<div class='col-sm-12'>
    <div class='callout callout-success'>
        {{Session::get('success')}}
    </div>
</div>
@endif

<section class="content-header">
    <h1>
        Insert Course
    </h1>
</section>

<?php  
use Carbon\Carbon;
$mon=Carbon::now()->month;
?>

<div class="content container-fluid">
    <div class="box box-default">
        <form action="{{url('admin/course_insertion/add_course')}}" method="post">
        {{csrf_field()}}
        <div class="box-header"><i ></i>
            <h5 class='box-title'></h5>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dynamic_field">
                    <thead>
                        <tr>
                        	<th width="5%"></th>
                            <th width="15%">C Code</th>
                            <th width="30%">Course Title</th>
                            <th width="15%">Department</th>
                            <th width="20%">Semester</th>
                            <th width="10%">Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td><button class="add btn btn-flat btn-primary"><i class="fa fa-plus-circle"></i></button></td></i></button></td>
                        	<td><input type="text" class="form-control" name="c_code[]" id="c_code" required="required"></td>
                        	<td><input type="text" class="form-control" name="c_name[]" id="c_name" required="required"></td>
                        	<td><select class="select2 form-control" id="dept" name="dept[]" required="required">
                                    <option>Please Select</option>
                                    <option value="CSE">CSE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="MCE">MCE</option>
                                    <option value="CEE">CEE</option>
                                </select>
                             </td> 
                             <td><select class="select2 form-control" id="sem" name="sem[]" required="required">
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
                             </td> 
                             <td><input type="text" class="form-control" name="credit[]" id="credit" required="required"></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            <div class="box-footer">
                <div class="pull-right">
                    <button type="submit" class="btn btn-flat btn-success"> Save Course</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer-script')
<script src='{{asset('plugins/select2/select2.js')}}'></script>
<script>
   var no = 0;

    $('.add').on('click',function(e){
    if($("#c_code"+no).val()=="" || $("#c_name" + no).val()=="" || $("#dept" + no).val()=="" || $("#sem" + no).val()=="" || $("#credit" + no).val()==""){
        toastr.warning("Please Fill-up Required Fields ");
    }else{
        no++;
        $('#dynamic_field').append("<tr id='row"+no+"'>\n\
                <td><button class='btn btn-flat btn-danger remove' id='"+no+"'><i class='fa fa-close'></i></button></td>\n\
                <td><input type='text' class='form-control' name='c_code[]' id='c_code"+no+"'></td>\n\
                <td><input type='text' class='form-control' name='c_name[]' id='c_name"+no+"'></td>\n\
                <td><select class='select2 form-control' id='dept' name='dept[]'>\n\
                                    <option>Please Select</option>\n\
                                    <option value='CSE'>CSE</option>\n\
                                    <option value='EEE'>EEE</option>\n\
                                    <option value='MCE'>MCE</option>\n\
                                    <option value='CEE'>CEE</option>\n\
                                </select>\n\
                             </td> \n\
                             <td><select class='select2 form-control' id='sem' name='sem[]'>\n\
                                    <option>Please Select</option>\n\
                                     @if ($mon<6){\n\
                                    <option value='1st Semester'>1st Semester</option>\n\
                                                                        <option value='3rd Semester'>3rd Semester</option>\n\
                                    <option value='5th Semester'>5th Semester</option>\n\
                                    <option value='7th Semester'>7th Semester</option>\n\
                                }\n\
                                @else{\n\
                                    <option value='2nd Semester'>2nd Semester</option>\n\
                                    <option value='4th Semester'>4th Semester</option>\n\
\n\
                                    <option value='6th Semester'>6th Semester</option>\n\
                                    <option value='8th Semester'>8th Semester</option>\n\
                                }\n\
                                @endif\n\
                         </select>\n\
                             </td>\n\
                <td><input type='text' class='form-control' name='credit[]' id='credit"+no+"'></td>\n\
            </tr>");
    }
    e.preventDefault();
    return false;
})

$('#dynamic_field').on('click','.remove', function(e){
    var button_id = $(this).attr("id");
    $("#row"+button_id+"").remove();
    no--;
    e.preventDefault();
    return false;
}); 


</script>
@endsection