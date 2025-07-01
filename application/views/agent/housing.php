<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">House</h1>
          <p class="mb-4">List of houses</p>

          <!-- Content Row -->
          <!-- <div class="row"> -->
          <div class="card">
          	<div class="card-body">
          		<div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Option</th>
                      <th>House Name</th>
                      <th>Image</th>
                      <th>Video</th>
                      <!-- <th>House Description</th>
                      <th>Subdivision</th>
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
                      <th>Subdivision</th>
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
                      <td>
                        <button type="button" class="btn btn-info btn-sm" style="width:100%;max-width: 200px;" data-toggle="modal" data-target="#myModal<?php echo $value['house_id'] ?>">View   </button>
                        <!-- <button type="button" onclick="buy_sub(`<?php echo $value['house_id'] ?>`,`<?=$value['tota_contart_price']?>`)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editsubname">For Reservation</button> -->
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
  
	

  function delete_image(id,name){
      if(confirm("Do you want to delete?")){
        window.location = base_url+'Admin/delete_house?id='+id+'&name='+name;
      }else{
      }
  }

  function change_plan_function(){
    $.ajax({
        type:'POST',
        dataType:'JSON',
        url:base_url+"Admin/get_plan_available",
        data:{
          'plan_id'  : $('#buy_house #myplan').val()
        },
        success:function(data)
        {
          if(data == ''){
            $('#buy_house #downpayment_label').html("");
            $('#buy_house #months_label').html("");
            $('#buy_house #price_label').html("");
          }else{
            // alert(JSON.stringify(data));
            $('#buy_house #downpayment_label').html(data['downpayment']);
            $('#buy_house #months_label').html("₱ "+data['per_month']);
            $('#buy_house #price_label').html("₱ "+data['price']);
          }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

            if (textStatus == 'timeout') {

              alert('Timeout Error');

            } else {

              alert('Network problem. Please try again');

            }
          }
    });
  }

  function buy_sub(house_id,tota_contart_price){
    $('#editsubname #house_id').val(house_id);
    $('#editsubname #tota_contart_price').val(tota_contart_price);
    $('#buy_house #myplan').html("");
    $.ajax({
        type:'POST',
        dataType:'JSON',
        url:base_url+"Admin/get_plans",
        data:{
          'house_id'  : house_id
        },
        success:function(data)
        {
          var dataplan = "";
          // alert(JSON.stringify(data));
          dataplan += "<option value=''>Select Plan</option>";
          $.each(data, function(i,val){
            dataplan += "<option value='"+val.plan_id+"'>"+val.per_month+" months</option>";
          });
          $('#buy_house #myplan').append(dataplan);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

            if (textStatus == 'timeout') {

              alert('Timeout Error');

            } else {

              alert('Network problem. Please try again');

            }
          }
    });

    
  }
</script>

<div class="modal fade" id="editsubname" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <form action="<?=base_url()?>Agent/buyhouse" id="buy_house" method="post">
          <div class="modal-header">
            <h4 class="modal-title">For Reservation</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="user_id">Buyer's Name</label>
              
              <input type="hidden" class="form-control" name="tota_contart_price" id="tota_contart_price" autocomplete="off" required>
              <input type="hidden" class="form-control" name="house_id" id="house_id" autocomplete="off" required>
              <select class="form-control" name="user_id" id="user_id" autocomplete="off" required>
                <?php foreach (get_userslisst() as $key => $value) { ?>
                  <option value="<?=$value['user_id']?>"><?=$value['fname']?> <?=$value['mname']?> <?=$value['lname']?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="user_id">Buyer's Plan</label>
              <select id="myplan" onchange="change_plan_function()" required name="my_plan" class="form-control"></select>
            </div>
            <br/>
            <p><b>Downpayment:</b> <i id="downpayment_label"></i></p>
            <p><b>Months:</b> <i id="months_label"></i></p>
            <p><b>Price:</b> <i id="price_label"></i></p>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
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