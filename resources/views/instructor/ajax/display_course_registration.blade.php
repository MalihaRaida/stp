<div class='box box-default box-solid'>
    <div class='box-header bg-navy-active' style="text-align: center;"><h5 class='box-title'>Available Courses</h5></div>
    <div class='box-body' id="courseregistration">
        <div >
                <table class="table table-bordered table-condensed">
                @foreach($detail as $details)
                <tr>
                    <td><input type="checkbox"></td>
                    <td align="center">{{$details->course_code}}                           
                    </td>
                    <td align="center">{{$details->course_name}}                            
                    </td>
                </tr>
                @endforeach
                </table>
        </div>
    </div>
</div>