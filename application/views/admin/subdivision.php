<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Subdivision</h1>
          <p class="mb-4">List of subdivision</p>

          <!-- Content Row -->
          <div class="card">

          	<div class="card-body">
              <div class="buttonrightdiv">
          		  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addsubname">Add Subdivision</button>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Option</th>
                      <th>Name</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Option</th>
                      <th>Name</th>
                      <th>Date</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($subd as $key => $value){
                    ?>
                    <tr>
                      <td>
                        <button type="button" style="width: 100%;" onclick="edit_sub(`<?php echo $value['sub_id'] ?>`,`<?php echo $value['sub_name'] ?>`)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editsubname">Edit</button><br/><br/>
                        <button type="button" style="width: 100%;" onclick="delete_sub(`<?php echo $value['sub_id'] ?>`)" class="btn btn-danger btn-sm">Delete</button></td>
                      <td><?php echo $value['sub_name'] ?></td>
                      <td><?php echo $value['sub_date'] ?></td>
                    </tr>
                    <?php

                	}
                    ?>
                </tbody>
            </table>
            </div>
          </div>
        </div>
</div>


<script>
  var base_url = `<?php echo base_url(); ?>`;
	function edit_sub(id,name){
		$('#editsubname #sub_id').val(id);
		$('#editsubname #sub_name').val(name);
	}

  function delete_sub(id){
      if(confirm("Do you want to delete?")){
        window.location = base_url+'Admin/delete_sub?id='+id;
      }else{
      }
  }
</script>

<!-- Modal -->
  <div class="modal fade" id="addsubname" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      	<form action="<?=base_url()?>admin/addsubdivision" method="post">
	        <div class="modal-header">
	          <h4 class="modal-title">Add Subdivision</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          
	        </div>
	        <div class="modal-body">
	          <div class="form-group">
	          	<label for="sub_name">Sub Name</label>
	          	<input type="text" class="form-control" name="sub_name" autocomplete="off" required>
	          </div>
	        </div>
	        <div class="modal-footer">
	        	<button type="submit" class="btn btn-primary">Save</button>
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
    	</form>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="editsubname" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      	<form action="<?=base_url()?>admin/editsubdivision" method="post">
	        <div class="modal-header">
	          <h4 class="modal-title">Edit Subdivision</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          
	        </div>
	        <div class="modal-body">
	          <div class="form-group">
	          	<label for="sub_name">Sub Name</label>
	          	<input type="hidden" class="form-control" name="sub_id" id="sub_id" autocomplete="off" required>
	          	<input type="text" class="form-control" name="sub_name" id="sub_name" autocomplete="off" required>
	          </div>
	        </div>
	        <div class="modal-footer">
	        	<button type="submit" class="btn btn-primary">edit</button>
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
    	</form>
      </div>
      
    </div>
  </div>


<script type="text/javascript">
  $(document).ready( function () {
        $('#table_id').DataTable({
            "order": [[ 1, "desc" ]],
            dom: 'Bfrtip',
            lengthMenu: [
              [10, 25, 50, -1],
              [ '10 rows', '25 rows', '50 rows', '100 rows', '500 rows', '1000 rows' ],
            ],
            buttons: [{
              extend: 'pdf',
              title: 'Attendance',
              filename: 'report'
            }, {
              extend: 'excel',
              title: 'Attendance',
              filename: 'report'
            }, {
              extend: 'csv',
              filename: 'report'
            }]

        });
    } );
</script>