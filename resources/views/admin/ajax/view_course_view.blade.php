<div class="modal fade" id="Modal1">
    <div class="modal-dialog">
      <div class="modal-content">   
      <form>        
        <div class="modal-body">  
                
            <h4 class="modal-title" style="text-align: center;">{{$code}}</h4>    
            
             <table class="table table-bordered" id="dynamic_field">
                    <thead>
                        <tr>
                            <th width="5%"></th>
                            <th width="15%">Sid</th>
                            <th width="30%">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                     ?> 
                    @foreach($detail as $details)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$details->student_id}}</td>
                        <td>{{$details->name}}</td>
                    </tr>
                    <?php
                    $no++;
                    ?>
                    @endforeach 
                    </tbody>          
             </table>
        <div class="modal-footer">
          <button style="float: right" type="button" class="btn btn-flat btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
    </div>
</form>
  </div>
</div>
</div>
