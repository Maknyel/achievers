
        <div class="container-fluid">
          <div class="card" style="padding:10px;">  
            <form action="<?=base_url()?>admin/submittedprofile" method ='post'>
              <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" name='fname' value="<?=get_admin_data_field('fname')?>" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mname">Middle Name:</label>
                <input type="text" class="form-control" id="mname" name='mname' value="<?=get_admin_data_field('mname')?>" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" name='lname' required value="<?=get_admin_data_field('lname')?>" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name='username' required value="<?=get_admin_data_field('username')?>" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" class="form-control pwd-form" id="pwd" name='pwd' required value="<?=get_admin_data_field('password')?>" autocomplete="off">
              </div>
              <div style="width: 100%;text-align: right;">
                <button type="submit" class="btn btn-primary warren">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.container-fluid -->

