<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Images</h1>
          <p class="mb-4">List of images</p>

          <!-- Content Row -->
          <!-- <div class="row"> -->

          	<div class="card-body">
          		<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Option</th>
                      <th>Image</th>
                      <th>Date Uploaded</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Option</th>
                      <th>Image</th>
                      <th>Date Uploaded</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($subd as $key => $value){
                    ?>
                    <tr>
                      <td><button type="button" onclick="delete_image(`<?php echo $value['image_id'] ?>`,`<?=$value['image_name'] ?>`)" class="btn btn-danger btn-sm">Delete</button></td>
                      <td><img src="<?php echo base_url().'uploads/'.$value['image_name'] ?>" width="100px"></td>
                      <td><?php echo $value['image_date'] ?></td>
                    </tr>
                    <?php

                	}
                    ?>
                </tbody>
            </table>
          </div>
    <!-- </div> -->
        </div>
</div>


<script>
  var base_url = `<?php echo base_url(); ?>`;
	

  function delete_image(id,name){
      if(confirm("Do you want to delete?")){
        window.location = base_url+'Admin/delete_image?id='+id+'&name='+name;
      }else{
      }
  }
</script>

