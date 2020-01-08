<div class='box box-default box-solid'>
    <div class='box-header bg-navy-active' style="text-align: center;"><h5 class='box-title'>Result Sheet</h5></div>
    <div class='box-body' id="adminresult">
        <div >
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
                        <td><button type="button" class="btn btn-warning waves-light">Edit</button></td>
                        <td>{{$details->student_id}}</td>
                        <td>{{$details->name}}</td>
                        <td><input type="text" name="attendence"></td>
                    @endforeach
               </tbody>
                </table>
        </div>
    </div>
</div>

