<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Plan</h1>
          <!-- <p class="mb-4">List of houses</p> -->

          <!-- Content Row -->
          <div class="card">

          	<div class="card-body">
          		<div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Option</th>
                      <th>Status</th>
                      <th>Price</th>
                      <th>Date Paid</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th>Option</th>
                      <th>Status</th>
                      <th>Price</th>
                      <th>Date Paid</th>

                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($subd as $key => $value){
                    ?>
                    <tr>
                      <td>
                        <?php if($value['is_payed'] == '0'){ ?>
                          <a class="btn btn-primary" href="<?=base_url()?>agent/pay_sale/<?=$value['id']?>?id=<?=$id?>">Paid</a>
                        <?php } ?>
                      </td>
                      <td><?php echo ($value['is_payed'] == '1')?'Paid':'Pending'; ?></td>
                      <td>₱ <?php echo $value['price'] ?></td>
                      <td><?php echo $value['date_payed'] ?></td>

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