<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">File Management</h1>
          <!-- <p class="mb-4">List of houses</p> -->

          <!-- Content Row -->
          <div class="card">

          	<div class="card-body">
              <div class="buttonrightdiv">
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_file">Add File</button> -->
              </div>
          		<div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      
                      <th>Date Uploaded</th>
                      <th>Name</th>
                      <th>Created By</th>
                      <th>Action</th>

                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      
                      <th>Date Uploaded</th>
                      <th>Name</th>
                      <th>Created By</th>
                      <th>Action</th>

                      
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach(get_all_file_management() as $key => $value){
                    ?>
                    <tr>
                      <td><?php echo $value['date_added'] ?></td>
                      <td><?php echo $value['orig_name'] ?></td>
                      <td><?php echo $value['fname'].' '.$value['lname'] ?></td>
                      <td><a href="<?=base_url()?>file_management/<?=$value['file_name']?>" download>Download</a></td>

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
        $('#upload_file').click(function(){
          $('#file').click();
        });
        $(document).on('change','#file', function(){
          upload();
        });
    } );
    

    


    function upload(){
      
        var form = $('#uploadForm')[0];

        // Create an FormData object
        var dataString = new FormData(form);
              $.ajax({
                type:'POST',
                dataType: "json",
                data: dataString,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                url:base_url+"Admin/upload_file",
                
                beforeSubmit: function(data) {
                  $('.loader_thumb').show();
                    
                },
                uploadProgress: function (event, position, total, progress){
                    
                },
                success:function(data)
                {
                  $('.loader_thumb').hide();
                    if(data.status !== 'success'){

                          if (data.msg == "<p>The filetype you are attempting to upload is not allowed.</p>") {
                              var pop_msg = "<p>"+'Invalid file type upload files in PDF,png, jpeg or jpg format only'+"</p>";
                          }else{
                              var pop_msg = data.msg;
                          }

                          alert(pop_msg);


                      } else {
                        alert("File Uploaded");
                        location.reload();
                       
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

    $('#close_file').click(function(){
      $('.cover_upload2').hide();
      $('.cover_upload2 img').attr('src', '');
      $('.cover_upload').show();
      $('#news_image').val('');

    });
</script>

<div class="modal fade" id="add_file" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <form  method="post" id="add_news">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add File</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          

          <div class="form-group">
              <label for="news_title">File:</label>
                <div style="text-align: center;" class="cover_upload" id="upload_file"><i class="fa fa-upload upload_fa" aria-hidden="true"></i></div>
                <div class="cover_upload2 display-flex" id="" style="display: none;">
                  <div style="display: flex;align-items: center;">
                    <img style="width:90%;height:auto;" src=""><div id="close_file"><i class="fa fa-close " ></i></div>
                  </div>
                </div>
          </div>
        </div>
      </div>
      </form>
      <form class="nodisplay" id="uploadForm" enctype="multipart/form-data">
        <input type="file" name ="file" id="file" accept="image/*">
      </form>
    </div>
  </div>

