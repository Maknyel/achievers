<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">House</h1>
          <p class="mb-4">List of houses</p>

          <!-- Content Row -->
          <!-- <div class="row"> -->
          <div class="card">
          	<div class="card-body">
              <div class="buttonrightdiv">
                <a class="btn btn-primary" href="<?php echo base_url()?>admin/add_house">Add House</a>
              </div>
          		<div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Option</th>
                      <th>House Name</th>
                      <th>Image</th>
                      <th>Video</th>
                      
                      <!-- <th>House Description</th> -->
                      <!-- <th>Subdivision</th>
                      <th>House Model</th>
                      <th>House Type</th>
                      <th>Village</th>
                      <th>Address</th>
                      <th>Lot Area</th>
                      <th>Floor Area</th>
                      <th>Bed Rooms</th>
                      <th>Bath Rooms</th>
                      <th>Storeys</th>
                      <th>Car Garage</th>
                      <th>Amenities</th>
                      <th>Total</th>
                      <th>Date Added</th> -->
                      <!-- <th>Date Updated</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Option</th>
                      <th>House Name</th>
                      <th>Image</th>
                      <th>Video</th>
                      <!-- <th>House Description</th>
                      <th>House ID</th>
                      <th>House Model</th>
                      <th>House Type</th>
                      <th>Village</th>
                      <th>Address</th>
                      <th>Lot Area</th>
                      <th>Floor Area</th>
                      <th>Bed Rooms</th>
                      <th>Bath Rooms</th>
                      <th>Storeys</th>
                      <th>Car Garage</th>
                      <th>Amenities</th>
                      <th>Total</th>
                      <th>Date Added</th> -->
                      <!-- <th>Date Updated</th> -->
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($subd as $key => $value){
                    ?>
                    <tr>
                      <td style="text-align:center;">
                        <!-- <button type="button" onclick="delete_image(`<?php echo $value['house_id'] ?>`,`<?=$value['image'] ?>`)" class="btn btn-danger btn-sm">Delete</button> -->
                        <button type="button" style="width: 100%;max-width: 200px;" onclick="edit_path(`<?php echo $value['house_id'] ?>`)" class="btn btn-primary btn-sm">Edit</button><br/><br/>

                        <button type="button" style="width: 100%;max-width: 200px;" onclick="window.location = `<?=base_url()?>admin/houseimages/<?=$value['house_id']?>`" class="btn btn-warning">View House Images</button><br/></br/>
                        <button type="button" class="btn btn-info btn-sm" style="width:100%;max-width: 200px;" data-toggle="modal" data-target="#myModal<?php echo $value['house_id'] ?>">View   </button>
                      </td>
                      <td><?php echo $value['house_name'] ?></td>
                      <td><?php if ($value['image'] != '') {?><img src="<?=base_url()?>uploads/<?php echo $value['image'] ?>" width="auto" height="70"><?php } ?></td>
                      <td><?php if ($value['video'] != '') {?><iframe id="iframe<?=$value['house_id']?>"></iframe> 
                      <script>
                            var str = "<?=$value['video']?>";
                            var res = str.split("=");
                            var embeddedUrl = "https://www.youtube.com/embed/"+res[1];
                            $('#iframe<?=$value['house_id']?>').attr('src',embeddedUrl);
                            // document.getElementById("iframe").innerHTML = res;
                      </script>
                      <?php } ?></td>
                      <!-- <td><?php echo $value['house_decs'] ?></td>
                      <td><?php echo get_subdivision_field($value['house_decs_id'],'sub_name') ?></td>
                      <td><?php echo $value['house_model'] ?></td>
                      <td><?php echo $value['house_type'] ?></td>
                      <td><?php echo $value['village'] ?></td>
                      <td><?php echo $value['address'] ?></td>
                      <td><?php echo $value['lot_area'] ?></td>
                      <td><?php echo $value['floor_area'] ?></td>
                      <td><?php echo $value['bed_rooms'] ?></td>
                      <td><?php echo $value['bath_rooms'] ?></td>
                      <td><?php echo $value['storeys'] ?></td>
                      <td><?php echo $value['car_garage'] ?></td>
                      <td><?php echo $value['with_balcony'] ?></td>
                      <td><?php echo number_format($value['tota_contart_price']) ?></td>
                      <td><?php echo $value['date_added'] ?></td> -->
                      <!-- <td><?php echo $value['date_updated'] ?></td> -->
                    </tr>
                    <div class="modal fade" id="myModal<?php echo $value['house_id'] ?>" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title"><?php echo $value['house_name'] ?></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                          </div>
                          <div class="modal-body">
                            
                            <!-- <p><b>House Name:</b><?php echo $value['house_name'] ?></p>
                            <p><b>Image:</b><?php if ($value['image'] != '') {?><img src="<?=base_url()?>uploads/<?php echo $value['image'] ?>" width="auto" height="70"><?php } ?></p>
                            <p><b>Video:</b><?php if ($value['video'] != '') {?><iframe id="iframev2<?=$value['house_id']?>"></iframe> 
                            <script>
                                  var str = "<?=$value['video']?>";
                                  var res = str.split("=");
                                  var embeddedUrl = "https://www.youtube.com/embed/"+res[1];
                                  $('#iframev2<?=$value['house_id']?>').attr('src',embeddedUrl);
                                  // document.getElementById("iframe").innerHTML = res;
                            </script>
                            <?php } ?></p> -->
                            <p><b>House Description:</b> <?php echo $value['house_decs'] ?></p>
                            <p><b>House ID:</b> <?php echo get_subdivision_field($value['house_decs_id'],'sub_name') ?></p>
                            <p><b>House Model:</b> <?php echo $value['house_model'] ?></p>
                            <p><b>House Type:</b> <?php echo $value['house_type'] ?></p>
                            <p><b>Village:</b> <?php echo $value['village'] ?></p>
                            <p><b>Address:</b> <?php echo $value['address'] ?></p>
                            <p><b>Lot Area:</b> <?php echo $value['lot_area'] ?></p>
                            <p><b>Floor Area:</b> <?php echo $value['floor_area'] ?></p>
                            <p><b>Bed Rooms:</b> <?php echo $value['bed_rooms'] ?></p>
                            <p><b>Bath Rooms:</b> <?php echo $value['bath_rooms'] ?></p>
                            <p><b>Storeys:</b> <?php echo $value['storeys'] ?></p>
                            <p><b>Car Garage:</b> <?php echo $value['car_garage'] ?></p>
                            <p><b>Amenities:</b> <?php echo $value['with_balcony'] ?></p>
                            <p><b>Total:</b> <?php echo number_format($value['tota_contart_price']) ?></p>
                            <p><b>Date Added:</b> <?php echo $value['date_added'] ?></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>
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


<script>
  
	function edit_path(house_id){
    window.location = "<?=base_url()?>admin/edit_house/"+house_id;
  }

  function delete_image(id,name){
      if(confirm("Do you want to delete?")){
        window.location = base_url+'Admin/delete_house?id='+id+'&name='+name;
      }else{
      }
  }
</script>


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