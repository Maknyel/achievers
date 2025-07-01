<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Chat Application in Codeigniter</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet" />
  <style type="text/css">
   
   #chat_message_area
   {
    width: 100%;
    height: auto;
    min-height: 80px;
    overflow: auto;
    padding:6px 24px 6px 12px;
    border: 1px solid #CCC;
       border-radius: 3px;
   }

   .notification_circle {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: #FF0000;
    text-align: center;
    color:#fff;
    padding:3px 6px;
   }
   .online
   {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: #5cb85c;
    text-align: center;
    color:#fff;
    padding:3px 6px;
   }
   .offline
   {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: #ccc;
    text-align: center;
    color:#fff;
    padding:3px 6px;
   }

  </style>
 </head>
 <body>
  <div clas="container-fluid">
   <br />
   <h2 align="center">Chat Application in Codeigniter</h2>
   <br />
   <div class="col-md-12" align="right">
    <a href="<?php echo base_url(); ?>google_login/logout">Logout</a>
   </div>
   <div class="col-md-3" style="padding-right:0;">
    <div class="panel panel-default" style="height: 700px; overflow-y: scroll;">
     <div class="panel-heading">Chat with User</div>
     <div class="panel-body" id="chat_user_area">

     </div>
     <input type="hidden" name="hidden_receiver_id_array" id="hidden_receiver_id_array" />
    </div>
   </div>
   <div class="col-md-6" style="padding-left:0; padding-right: 0;">
    <div class="panel panel-default" style="">
     <div class="panel-heading">Chat Area</div>
     <div class="panel-body">
      <div id="chat_header">
       <h2 align="center" style="margin:0; padding-bottom:16px;"><span id="dynamic_title">Welcome <?php echo $this->session->userdata('username'); ?></span></h2>
      </div>
      <div id="chat_body" style="height:406px; overflow-y: scroll;"></div>
      <div id="chat_footer" style="">
       <hr />
       <div class="form-group">
        
       </div>
       <div class="form-group" align="right">
        
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="col-md-3" style="padding-left:0;">
    <div class="panel panel-default" style="height: 300px; overflow-y: scroll;">
     <div class="panel-heading">Search User</div>
     <div class="panel-body">
      <div class="row">
       <div class="col-md-8">
        
       </div>
       <div class="col-md-4">
        
       </div>
      </div>
      
      <div id="search_user_area"></div>
      
     </div>
    </div>
    <div class="panel panel-default" style="height: 380px; overflow-y: scroll;">
     <div class="panel-heading">Nofication</div>
     <div class="panel-body" id="notification_area">
      
     </div>
    </div>
   </div>
  </div>
 </body>
</html>

<script>

$(document).ready(function(){

 

});

</script>