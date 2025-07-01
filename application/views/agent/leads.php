<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Leads</h1>
          <!-- <p class="mb-4">List of houses</p> -->

          <!-- Content Row -->
          <div class="card">
            <div class="card-header text-right">
              <button class="btn btn-primary btn-sm" onclick="window.location = `<?=base_url()?>Agent/add_leads`">Add</button>
            </div>

          	<div class="card-body">
          		<div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      
                      <th>Fullname</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>

                      <th>Gender</th>
                      <th>Birthday</th>
                      <th>Address</th>

                      <th>Employment Industry</th>
                      <th>Source of Income</th>
                      <th>Civil Status</th>
                      <th>Employment Type</th>
                      <th>Lead Source</th>
                      <th>Income Bracket</th>

                      <th>Date Added</th>
                      <!-- <th>Date Updated</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      
                      <th>Fullname</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>

                      <th>Gender</th>
                      <th>Birthday</th>
                      <th>Address</th>

                      <th>Employment Industry</th>
                      <th>Source of Income</th>
                      <th>Civil Status</th>
                      <th>Employment Type</th>
                      <th>Lead Source</th>
                      <th>Income Bracket</th>



                      <th>Date Added</th>
                      <!-- <th>Date Updated</th> -->
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach(get_agent_leads() as $key => $value){
                    ?>
                    <tr>
                      <td><?php echo $value['fullname'] ?></td>
                      <td><?php echo $value['email'] ?></td>
                      <td><?php echo $value['subject'] ?></td>
                      <td><?php echo $value['message'] ?></td>

                      <td><?php echo $value['gender'] ?></td>
                      <td><?php echo $value['birthday'] ?></td>
                      <td><?php echo $value['address'] ?></td>

                      <td><?php echo $value['employment_industry1'] ?></td>
                      <td><?php echo $value['source_of_income1'] ?></td>
                      <td><?php echo $value['civil_status1'] ?></td>
                      <td><?php echo $value['employment_type1'] ?></td>
                      <td><?php echo $value['lead_source1'] ?></td>
                      <td><?php echo $value['income_bracket1'] ?></td>

                      <td><?php echo $value['date_added'] ?></td>
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