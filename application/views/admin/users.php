<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Clients</h1>
          <p class="mb-4">List of Clients</p>

          <!-- Content Row -->
          <!-- <div class="row"> -->
            <div class="card">
            	<div class="card-body">
            		<div class="table-responsive">
                  <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Option</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <!-- <th>Password</th> -->
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
                        <!-- <th>Password</th> -->
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
                          <!-- <a class="btn btn-danger btn-sm" href="<?=base_url()?>admin/del_user/<?=$value['user_id']?>">Delete</a> -->
                        </td>
                        <td><?php echo (($value['fname'] != '')? $value['fname'].' ' : '').(($value['mname'] != '')? $value['mname'].' ' : '').(($value['lname'] != '')? $value['lname'].' ' : ''); ?></td>
                        <td><?php echo $value['contact_number'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <!-- <td><?php echo $value['password'] ?></td> -->
                        <td><?php echo $value['date_added'] ?></td>
                        <td><?php echo $value['date_updated'] ?></td>
                      </tr>
                      <?php

                  	}
                      ?>
                  </tbody>
              </table>
          <!-- </div> -->
            </div>
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