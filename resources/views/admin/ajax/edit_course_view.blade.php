<div class="modal fade" id="Modal2">
    <div class="modal-dialog">
      <div class="modal-content">
          <form>
            @foreach($detail as $details)
        <div class="modal-body">           
            <h4 class="modal-title" style="text-align: center;">{{$details->course_code}}</h4>
            <div class=row>
            	<div class="col-sm-8">
                <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" name="course_name" class="form-control" value="{{$details->course_name}}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Credit</label>
                    <input type="text" name="credit" class="form-control" value="{{$details->credit}}">
                </div>
            </div>
            </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" name="department" class="form-control" value="{{$details->course_dept}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Semester</label>
                            <input type="text" name="semester" class="form-control" value="{{$details->semester}}">
                        </div>
                    </div>
                </div>               
        </div>
       @endforeach
        <div class="modal-footer">
          <button type="button" class="btn btn-flat btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-flat btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>