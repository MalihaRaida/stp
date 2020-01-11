<div class='box box-default box-solid'>
    <div class='box-header bg-navy-active' style="text-align: center;"><h5 class='box-title'>Result Sheet</h5></div>
    <div class='box-body' id="adminresult">
        <div >
            <form action="{{url('/admin/save_result')}}" method="post">
                {{csrf_field()}}
                <table class="table table-bordered table-condensed">
                
                <tr>
                    <th></th>
                    <th>SID</th>
                    <th>Student Name</th>
                    <th>Attendence</th>
                    <th>quiz1</th>
                    <th>quiz2</th>
                    <th>quiz3</th>
                    <th>quiz4</th>
                    <th>Mid</th>
                    <th>Final</th>
                    <th>Grade</th>
                    <th>Credit</th>
                </tr>
               <tbody>
                   @foreach($detail as $details)
                   <tr>
                       <td><button type="button" class="btn btn-warning waves-light">Edit</button></td>
                        <td>
                       <input type="text" style="display: none;" name="course" value="{{$details->course}}">
                        <input type="text" style="display: none;" name="sid[]" value="{{$details->student_id}}">    {{$details->student_id}}</td>

                        <td>{{$details->name}}</td>
                        <td><input type="number" name="attendence[]"
                            min="0" max="30" ></td>  

                        <td><input type="number" name="q1[]" ></td>
                        <td><input type="number" name="q2[]"></td>
                        <td><input type="number" name="q3[]"></td>
                        <td><input type="number" name="q4[]"></td>
                        <td><input type="number" name="mid[]"></td>
                        <td><input type="number" name="final[]"></td>
                        <td><input type="text" name="grade[]"></td>
                        <td><input type="number" step="any" name="credit[]"></td>
                        <td><input type="text" style="display: none;" name="semester" value="{{$details->semester}}"></td>
                        <td><input type="text" style="display: none;" name="department" value="{{$details->dept}}"></td>
                   </tr>   
                    @endforeach
               </tbody>
                </table>
               <div class="box-footer">
                <div class="pull-right">
                    <button type="submit" class="btn btn-flat btn-success"> Save </button>
                </div>
            </div>
            </form>
                
        </div>
    </div>
</div>

