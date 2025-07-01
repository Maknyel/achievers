
        <div class="container-fluid">
          <div class="card" style="padding:10px;">
            <form style="display: none;" id="uploadForm2" action="<?php echo base_url();?>Agent/uploaduserimage?user_id=<?=mysession_agent()?>&old_file_name=<?=get_agent_data_field('image')?>" method="POST" enctype="multipart/form-data">
              <input type="file" name="file" id="clicked_image_background" accept="image/*">
            </form>
            <div class="text-center">
                      <?php if(get_agent_data_field('image') != ''){ ?>
                          <img src = "<?=base_url()?>users/<?=get_agent_data_field('emp_id')?>/<?=get_agent_data_field('image')?>" id = "blah" style="max-width: 20vw;width:20vw;height: auto;"/>
                      <?php }else{ ?>
                          <img src = "<?=base_url()?>assets/image/agent.png" id = "blah" style="max-width: 20vw;width:20vw;height: auto;"/>
                      <?php } ?>
                      <br><br>
                <button class="btn btn-primary" onclick="upload_background()">Upload</button>  
            </div>


            <form action="<?=base_url()?>agent/submittedprofile" method ='post'>
                <div class="form-group">
                  <label for="fname">First Name:</label>
                  <input type="text" class="form-control" id="fname" name='fname' value="<?=get_agent_data_field('fname')?>" required autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="mname">Middle Name:</label>
                  <input type="text" class="form-control" id="mname" name='mname' value="<?=get_agent_data_field('mname')?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="lname">Last Name:</label>
                  <input type="text" class="form-control" id="lname" name='lname' required value="<?=get_agent_data_field('lname')?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="contact_number">Contact Number:</label>
                  <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="11" class="form-control" id="contact_number" name='contact_number' required value="<?=get_agent_data_field('contact_number')?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control" id="email" name='email' required value="<?=get_agent_data_field('email')?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="emp_type">Position</label>
                  <select class="form-control" name="emp_type" autocomplete="off" required>
                    <option <?=(get_agent_data_field('emp_type') == 'Supervisor')?'selected':''?>>Supervisor</option>
                    <option <?=(get_agent_data_field('emp_type') == 'Sale Manager')?'selected':''?>>Sale Manager</option>
                    <option <?=(get_agent_data_field('emp_type') == 'Marketing Officer')?'selected':''?>>Marketing Officer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" class="form-control pwd-form" id="pwd" name='pwd' required value="<?=get_agent_data_field('password')?>" autocomplete="off">
                </div>
                <div style="width: 100%;text-align: right;">
                  <button type="submit" class="btn btn-primary warren">Submit</button>
                </div>
            </form>
          </div>
          
</div>
        <!-- /.container-fluid -->

<script>
  
        function upload_background(){
          // alert();
          $('#clicked_image_background').click();
        }
        $(document).on('change','#clicked_image_background',function(e){
        e.preventDefault();
        var form = $('#uploadForm2')[0];

        // Create an FormData object
        var dataString = new FormData(form);

        // alert(dataString);
            var uploadtracing = $('#uploadForm2');
            $.ajax({
              type:'POST',
              dataType: "json",
              data: dataString,
              enctype: 'multipart/form-data',
              processData: false,
              contentType: false,
              cache: false,
              // timeout: 600000,
              url: base_url+"Agent/uploaduserimage?user_id=<?=mysession_agent()?>&old_file_name=<?=get_agent_data_field('image')?>",
              beforeSubmit: function(data){
                // $('.loader_thumb').show();
              },
              uploadProgress: function (event, position, total, progress){
                // $('.loader_thumb').show();
              },
              success: function(data){
                  if(data.status !== 'success'){

                      if (data.msg == "The filetype you are attempting to upload is not allowed.") {
                          var pop_msg = ""+'Invalid file type upload files in png, jpeg or jpg format only'+"";
                      }else{
                          var pop_msg = data.msg;
                      }
                        app.alert('Error',pop_msg,'error');


                    } else {
                      // $('.loader_thumb').hide();
                      // $('#image').val(data.file_data.file_name);
                      // $('#blah').attr('src',base_url+'users/'+`<?=get_agent_data_field('emp_id')?>`+'/'+data.file_data.file_name);
                      location.reload();
                    }

              },
              resetForm: true
            });
        });
</script>