<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
05
      crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
        <div class="container-fluid" style="min-height: 100vh;">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Email Campaign</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-4">
              <form id="submit_email_campaign">
                <div class="card shadow mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="to">To:</label><br/>
                      <select class="form-control" id="to" name='to[]' required autocomplete="off" multiple>
                        <?php foreach (get_leads_email() as $key => $value) { ?>
                          <option><?=$value['email']?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="cc">CC:</label><br/>
                      <input type="text" class="form-control" id="cc" name='cc' required autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label for="content_data">Content:</label>
                      <textarea class="form-control" id="content_data" name='content_data' required autocomplete="off"></textarea>
                    </div>


                    
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>


          

        </div>
      </div>
        <!-- /.container-fluid -->
<style type="text/css">
  .bootstrap-tagsinput .tag{
    /*color: black !important;*/
  }
  .label-info {
    background-color: #5bc0de;
  }
  .label {
    display: inline;
    padding: 0.2em 0.6em 0.3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25em;
}
.bootstrap-tagsinput .tag [data-role="remove"] {
    margin-left: 8px;
    cursor: pointer;
}
</style>
<script type="text/javascript">
  // $("#submit_email_campaign #cc").tagsinput('items');
  // $("#submit_email_campaign #to").tagsinput('items');
  $('#submit_email_campaign #to').select2();

  CKEDITOR.replace( 'content_data' );

  $(document).on('submit','#submit_email_campaign',function(e){
        e.preventDefault();
        var to = $('#submit_email_campaign #to').val();
        var cc = $('#submit_email_campaign #cc').val();
        var content_data = $('#submit_email_campaign #content_data').val();
        
        

         

        var data = {
            'to':to,
            'cc':cc,
            'content_data':content_data


       

        };

        // alert(JSON.stringify(data))
     
        $.ajax({
            type:'POST',
            dataType:'JSON',
            url:base_url+"Agent/submit_email_campaign_function",
            data:data,
            success:function(data)
            {
              if(data == 1){
                  alert('Successfully Send');
                  // window.location = base_url+'Agent/leads';
                  location.reload();
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