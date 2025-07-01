<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Agents</h1>
          <p class="mb-4">List of Agents</p>

          <!-- Content Row -->
          <div class="card">

          	<div class="card-body">
              <div class="buttonrightdiv">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addagent">Add Agent</button>
              </div>
          		<div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Option</th>
                      <th>Name</th>
                      <th>Contact Number</th>
                      <th>Email</th>
                      <th>Position</th>
                      <th>Date Registered</th>
                      <th>Date Updated</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Option</th>
                      <th>Name</th>
                      <th>Contact Number</th>
                      <th>Email</th>
                      <th>Position</th>
                      <th>Date Registered</th>
                      <th>Date Updated</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($subd as $key => $value){
                    ?>
                    <tr>
                      <td>
                        <!-- <a class="btn btn-danger btn-sm" href="<?=base_url()?>admin/del_agent/<?=$value['emp_id']?>">Delete</a> -->
                      </td>
                      <td>
                        <img src="<?=base_url()?>users/<?=$value['emp_id']?>/<?=$value['image']?>" onerror="this.src='<?=base_url()?>assets/image/agent.png';" alt="" style="width: 50px;height: auto;">&nbsp;
                        <?php echo (($value['fname'] != '')? $value['fname'].' ' : '').(($value['mname'] != '')? $value['mname'].' ' : '').(($value['lname'] != '')? $value['lname'].' ' : ''); ?></td>
                      <td><?php echo $value['contact_number'] ?></td>
                      <td><?php echo $value['email'] ?></td>
                      <td><?php echo $value['emp_type'] ?></td>
                      <td><?php echo $value['date_added'] ?></td>
                      <td><?php echo $value['date_updated'] ?></td>
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


<!-- Modal -->
  <div class="modal fade" id="addagent" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <form action="<?=base_url()?>admin/addagent" method="post">
          <div class="modal-header">
            <h4 class="modal-title">Add Agent</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" class="form-control" name="fname" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label for="mname">Middle Name</label>
              <input type="text" class="form-control" name="mname" autocomplete="off">
            </div>

            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" class="form-control" name="lname" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label for="contact_number">Contact Number</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="contact_number" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label for="emp_type">Position</label>
              <select class="form-control" name="emp_type" autocomplete="off" required>
                <option>Supervisor</option>
                <option>Sale Manager</option>
                <option>Marketing Officer</option>
              </select>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" class="form-control" name="password" autocomplete="off" required>
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