<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">House</h1>
          <p class="mb-4">List of houses</p>

          <!-- Content Row -->
          <!-- <div class="row"> -->

          	<div class="card-body">
              <div class="buttonrightdiv">
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#add_house">Add House Images</a>
              </div>
          		<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Option</th>
                      <th>Image</th>
                      <th>Date Added</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Option</th>
                      <th>Image</th>
                      <th>Date Added</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($subd as $key => $value){ ?>
                    <tr>
                      <td>
                        <button type="button" style="width:100%;" onclick="delete_image(`<?php echo $value['image_id'] ?>`,`<?=$value['image_name'] ?>`,`<?=$value['house_id']?>`)" class="btn btn-danger btn-sm">Delete</button>
                        
                      </td>
                      <td><?php if ($value['image_name'] != '') {?><img src="<?=base_url()?>houseimage/<?=$value['house_id']?>/<?=$value['image_name']?>" width="auto" height="70"></image><?php } ?></td>
                      <td><?php echo $value['image_date'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <!-- </div> -->
    </div>
          </div>
</div>


<script>
  
	

  function delete_image(image_id,image_name,house_id){
      if(confirm("Do you want to delete?")){
        window.location = base_url+'Admin/delete_image_house?image_id='+image_id+'&image_name='+image_name+'&house_id='+house_id;
      }else{
      }
  }
</script>


<div class="modal fade" id="add_house" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Images</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url(); ?>Admin/dragDropUpload_images?house_id=<?=$id?>" class="dropzone"></form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>