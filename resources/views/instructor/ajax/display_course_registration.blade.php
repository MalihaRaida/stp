<div class='box box-default box-solid'>
    <div class='box-header bg-navy-active' style="text-align: center;"><h5 class='box-title'>Available Course</h5></div>
    <div class='box-body' id="courseregistration">
        <div >
            <form action="{{url('/instructor/course_registration/courses')}}" method="post">
                {{csrf_field()}}
                <table class="table table-bordered table-condensed">
                @foreach($detail as $details)
                <tr>
                    <td><input type="checkbox" name="course_code[]" value="{{$details->course_code}}"></td>
                    <input style="display: none;" type="text" name="sem" value="{{$sem}}">
                    <input style="display: none;" type="text" name="sid" value="{{$sid}}">
                    <td align="center">{{$details->course_code}}                           
                    </td>
                    <td align="center">{{$details->course_name}}                            
                    </td>
                </tr>
                @endforeach
                </table>
                <button style="float: right" type="submit" class="btn btn-flat btn-primary">Register</button>
            </form>
                
            </div>
                
        </div>
    </div>
</div>