<div class="container-fluid">

  <div class="row">
    <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
      <div class="card direct-chat direct-chat-primary">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
          <h3 class="card-title">Chats</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <?php foreach (get_all_message() as $key => $value) { ?>
            <?php if(check_current_agent_for_agent($value["user_id"]) > 0){ ?>
              <ul class="list-group">
                <li class="list-group-item">
                  <a href="#" onclick="chatready('<?=$value["user_id"]?>');">
                      <div><?=$value["USERNAME"]?></div>
                  </a>
                </li>
              </ul>
            <?php } ?>
          <?php } ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>

      
    </div>
    <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
      <div class="card direct-chat direct-chat-primary">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
          <h3 class="card-title chatuser">Live Chat</h3>
        </div>
        <!-- /.card-header -->
        <form id="chatform">
        <div class="card-body">
          <script type="text/javascript">

            function chatready(exampleeee){
              $('#chatform #wrapper2').removeAttr('style');
              $('#chatform .card-footer').removeClass('nodisplay');  
              loadMsg(exampleeee);      
              hideLoading();
              $("#chatform #to_user").val(exampleeee);
              $("form#chatform").submit(function(){
                              
                $.post(base_url+"Agent/update",{
                      message: $("#chatform #content").val(),
                      name: $("#chatform #name").val(),
                      to_user: $("#chatform #to_user").val(),
                      action: "postmsg"
                    }, function() {
                  
                      
                      $("#chatform #content").val("");
                      $("#chatform #content").focus();
                      loadMsg(exampleeee);
                });   
                return false;
              });
              
              
            };

            function showLoading(){
              $("#contentLoading").show();
              $("#txt").hide();
              // $("#author").hide();
            }
            function hideLoading(){
              $("#contentLoading").hide();
              $("#txt").show();
              // $("#author").show();
            }
            
            function addMessages(json,exampleeee) {
              $("#messagewindow").html("");
              $.each(json, function(i,val){
                        if(val.user_type == `1`){
                          if(`<?=mysession_agent()?>` == val.user_id_messages){
                            if(exampleeee == val.user_id_messages_to){  

                              // $("#messagewindow").append("<div class='chatinfodiv' style='width:100%;padding-left:30%;'><div class='chatboxmessage' title='"+val.time_date+"'><p style='color:black;'>YOU</p>"+val.message+"</div></div>");
                              $("#messagewindow").append("<div class='chatinfodiv' style='width:100%;padding-left:30%;'><div class='chatboxmessage' title='"+val.time_date+"'>"+val.message+"</div></div>");  
                            }
                          }
                          
                        }else{
                          if(exampleeee == val.user_id_messages){
                            if(val.user_to != 0){
                              if(val.user_to == `<?=mysession_agent()?>`){
                                $('.chatuser').html(val.USERNAME);
                                $("#messagewindow").append("<div class='chatinfodiv' style='width:100%;padding-right:30%;'><div class='chatboxmessage' title='"+val.time_date+"'>"+val.message+"</div></div>");  
                              }
                              
                            }else{
                              $('.chatuser').html(val.USERNAME);
                              $("#messagewindow").append("<div class='chatinfodiv' style='width:100%;padding-right:30%;'><div class='chatboxmessage' title='"+val.time_date+"'>"+val.message+"</div></div>");
                            }
                            
                          }
                          
                        }       
              });
            }
            
            function loadMsg(exampleeee) {
              $.getJSON(base_url+"Agent/json_backend/"+exampleeee, function(json) {
                $("#loading").remove();       
                addMessages(json,exampleeee);
              });
              
              // setTimeout(function(){ loadMsg(exampleeee); }, 4000);
            }
          </script>
          <style type="text/css">
            #messagewindow {
              height: 250px;
              border: 1px solid;
              padding: 5px;
              overflow: auto;
            }
            #wrapper2 {
              margin: auto;
              width: 100%;
            }
            .chatinfodiv{
              margin-bottom: 10px;
            }
            .chatboxmessage{
              background-color: rgb(96, 96, 96);
              padding: 7px 12px;
              word-break: break-word;
              color:white;
            }

            .nodisplay{
              display: none;
            }
          </style>
              
                  
                  <div id="wrapper2" style="display: none;">
                  <p id="messagewindow"><span id="loading">Loading...</span></p>
                  <div id="author" style="display: none;">
                  Name: <input type="text" class="form-control" id="name" value="Admin"/>
                  <input type="hidden" name="to_user" id="to_user">
                  </div>

                  <div id="txt">
                  Message: <textarea name="content" class="form-control" id="content" value=""></textarea>
                  </div>
                  
                  <div id="contentLoading" class="contentLoading">  
                  <img src="#" alt="Loading data, please wait...">  
                  </div>
                  
                  
                  
                  </div>
                
              
        </div>
        <!-- /.card-body -->
        <div class="card-footer nodisplay" style="width: 100%;text-align: right;">
          <input type="submit" class="btn btn-primary" value="Send" />
        </div>
        </form>
        <!-- /.card-footer-->
      </div>
    </div>
  </div>

          
</div>