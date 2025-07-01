<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">House sell</h1>
          <p class="mb-4">List of houses</p>

          <!-- Content Row -->
          <div class="card">

          	<div class="card-body">
          		<div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      
                      <th>House Name</th>
                      <th>Buyer's Name</th>
                      <th>Agent's Name</th>
                      <th>Image</th>
                      
                      <th>Subdivision</th>
                      <th>Address</th>
                      
                      <th>House Price</th>
                      <th>Date Added</th>
                      <!-- <th>Date Updated</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      
                      <th>House Name</th>
                      <th>Buyer's Name</th>
                      <th>Agent's Name</th>
                      <th>Image</th>
                      <th>Subdivision</th>
                      <th>Address</th>
                      
                      <th>House Price</th>
                      <th>Date Added</th>
                      <!-- <th>Date Updated</th> -->
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($subd as $key => $value){
                    ?>
                    <tr>
                      <td><?php echo $value['house_name'] ?></td>
                      <td><?=$value['fname']?> <?=$value['mname']?> <?=$value['lname']?></td>
                      <td><?=$value['ffname']?> <?=$value['mmname']?> <?=$value['llname']?></td>
                      <td><?php if ($value['image'] != '') {?><img src="<?=base_url()?>uploads/<?php echo $value['image'] ?>" width="auto" height="70" /><?php } ?></td>
                      <td><?php echo get_subdivision_field($value['house_decs_id'],'sub_name') ?></td>
                      <td><?php echo $value['address'] ?></td>
                     
                      <td><?php echo $value['curr_price'] ?></td>
                      <td><?php echo $value['date_added_agent'] ?></td>
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
              filename: 'attendancepdf'
            }, {
              extend: 'excel',
              title: 'Attendance',
              filename: 'attendanceexcel'
            }, {
              extend: 'csv',
              filename: 'attendancecsv'
            }]

        });
    } );
</script>