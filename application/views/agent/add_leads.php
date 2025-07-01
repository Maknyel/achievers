<div class="container-fluid">

    <div class="card">
        <form id="add_leads">
            <div class="card-header">
                <h3 class="card-title">Add Leads</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender" autocomplete="off" required>
                                <?php foreach (get_all_gender() as $key => $value) { ?>
                                    <option><?=$value?></option>    
                                <?php } ?>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" autocomplete="off" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="contact_number">Mobile Number</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number" autocomplete="off" required>
                        </div>

                        

                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label for="employment_industry">Employment Industry</label>
                            <select class="form-control" id="employment_industry" name="employment_industry" autocomplete="off" required>
                                <?php foreach (get_all_employee_industry() as $key => $value) { ?>
                                    <option value="<?=$value['id']?>"><?=$value['value']?></option>    
                                <?php } ?>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="source_of_income">Source of Income</label>
                            <select class="form-control" id="source_of_income" name="source_of_income" autocomplete="off" required>
                                <?php foreach (get_all_source_of_income() as $key => $value) { ?>
                                    <option value="<?=$value['id']?>"><?=$value['value']?></option>    
                                <?php } ?>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="civil_status">Civil Status</label>
                            <select class="form-control" id="civil_status" name="civil_status" autocomplete="off" required>
                                <?php foreach (get_all_civil_status() as $key => $value) { ?>
                                    <option value="<?=$value['id']?>"><?=$value['value']?></option>    
                                <?php } ?>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="employment_type">Employment Type</label>
                            <select class="form-control" id="employment_type" name="employment_type" autocomplete="off" required>
                                <?php foreach (get_all_employment_type() as $key => $value) { ?>
                                    <option value="<?=$value['id']?>"><?=$value['value']?></option>    
                                <?php } ?>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lead_source">Lead Source</label>
                            <select class="form-control" id="lead_source" name="lead_source" autocomplete="off" required>
                                <?php foreach (get_all_lead_source() as $key => $value) { ?>
                                    <option value="<?=$value['id']?>"><?=$value['value']?></option>    
                                <?php } ?>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="income_bracket">Income Bracket</label>
                            <select class="form-control" id="income_bracket" name="income_bracket" autocomplete="off" required>
                                <?php foreach (get_all_income_bracket() as $key => $value) { ?>
                                    <option value="<?=$value['id']?>"><?=$value['value']?></option>    
                                <?php } ?>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="leads_status">Leads Status</label>
                            <select class="form-control" id="leads_status" name="leads_status" autocomplete="off">
                                <option selected="selected" value=""></option>
                                <option value="Attempted">Attempted</option>
                                <option value="Contacted">Contacted</option>
                                <option value="Interested">Interested</option>
                                <option value="Nurture">Nurture</option>
                                <option value="Unresponsive">Unresponsive</option>
                                <option value="Lost">Lost</option>
                                <option value="Qualified">Qualified</option>
                                <option value="Tripping">Tripping</option>
                                <option value="Closed">Closed</option>    
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).on('submit','#add_leads',function(e){
        e.preventDefault();
        var fullname = $('#add_leads #fullname').val();
        var email = $('#add_leads #email').val();
        var gender = $('#add_leads #gender').val();
        var birthday = $('#add_leads #birthday').val();
        var address = $('#add_leads #address').val();
        var contact_number = $('#add_leads #contact_number').val();
        var employment_industry = $('#add_leads #employment_industry').val();
        var source_of_income = $('#add_leads #source_of_income').val();
        var civil_status = $('#add_leads #civil_status').val();
        var employment_type = $('#add_leads #employment_type').val();
        var lead_source = $('#add_leads #lead_source').val();
        var income_bracket = $('#add_leads #income_bracket').val();
        var leads_status = $('#add_leads #leads_status').val();

         

        var data = {
            'fullname':fullname,
            'email':email,
            'gender':gender,
            'birthday':birthday,
            'address':address,
            'contact_number':contact_number,
            'employment_industry':employment_industry,
            'source_of_income':source_of_income,
            'civil_status':civil_status,
            'employment_type':employment_type,
            'lead_source':lead_source,
            'income_bracket':income_bracket,
            'leads_status':leads_status,
            'agent_id': `<?=mysession_agent()?>`


       

        };
     
        $.ajax({
            type:'POST',
            dataType:'JSON',
            url:base_url+"Agent/add_leads_function",
            data:data,
            success:function(data)
            {
              if(data == 1){
                alert('Successfully Added');
                  window.location = base_url+'Agent/leads';
                  
              }else{
                alert('There`s something wrong please reload the page');
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
          
    });
</script>