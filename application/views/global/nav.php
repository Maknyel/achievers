

<body>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61ebb2f79bd1f31184d8b209/1fq0b66v0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="<?=base_url()?>">
        <img src="<?=global_logo()?>" style="height: 7vh">
        <!-- <span class="color-b">Agency</span> --></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?=($page=='dashboard')?'active':'';?>" href="<?=base_url()?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=($page=='about')?'active':'';?>" href="<?=base_url()?>about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=($page=='property')?'active':'';?>" href="<?=base_url()?>property">Our Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=($page=='news')?'active':'';?>" href="<?=base_url()?>news">News</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?=($page=='contact')?'active':'';?>" href="<?=base_url()?>contact">Contact US</a>
          </li>

          <?php if(client_session_val()){ ?>


          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>User/logout">Logout</a>
          </li>



          <?php }else{ ?>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#login">Buyers Portal</a>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#register">Register</a>
              </li> -->

              <!-- Modal -->

                <div class="modal fade" id="login" role="dialog">
                  <form action="<?=base_url()?>User/login_user" method="post">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#">Login</a></li>
                          <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#register">Sign Up</a></li>
                          <li><a  href="#" data-dismiss="modal" data-toggle="modal" data-target="#forget_pass" href="#" >Reset Pass</a></li>
                          <li><a href="#" data-dismiss="modal">Close</a></li>
                        </ul>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="" required="" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" class="form-control" id="password" name="password" placeholder="" required="" autocomplete="off">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>

                  </div>
                  </form>
                  <!-- <div class="bottomLinkMenu">
                      <a href="#">Login</a>
                      <span class="separator">•</span>
                      <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#register">Sign Up</a>
                      <span class="separator">•</span>
                      <a href="#" data-dismiss="modal">Close</a>
                    </div> -->
                </div>

                <div class="modal fade" id="forget_pass" role="dialog">
                  <form action="<?=base_url()?>User/forgetpassword" method="post">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Reset Pass</h5>
                        <ul class="nav nav-tabs">
                          <li><a  data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a></li>
                          <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#register">Sign Up</a></li>
                          <li class="active"><a href="#" >Reset Pass</a></li>
                          <li><a href="#" data-dismiss="modal">Close</a></li>
                        </ul>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="" required="" autocomplete="off">
                        </div>


                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>

                  </div>
                  </form>
                  <!-- <div class="bottomLinkMenu">
                      <a href="#">Login</a>
                      <span class="separator">•</span>
                      <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#register">Sign Up</a>
                      <span class="separator">•</span>
                      <a href="#" data-dismiss="modal">Close</a>
                    </div> -->
                </div>

                <div class="modal fade" id="register" role="dialog">
                  <form id="register_data" method="post">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Register</h5>
                        <ul class="nav nav-tabs">
                          <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a></li>
                          <li class="active"><a href="#" >Sign Up</a></li>
                          <li><a  href="#" data-dismiss="modal" data-toggle="modal" data-target="#forget_pass" href="#" >Reset Pass</a></li>
                          <li><a href="#" data-dismiss="modal">Close</a></li>
                        </ul>
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->

                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                            <label>Given Name: <span style="color:red;">*</span></label>
                            <input type="text" onkeyup="capitalize(this.id, this.value);" class="form-control" id="fname" name="fname" placeholder="" required="" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Middle Initial: </label>
                            <input type="text" onkeyup="capitalize(this.id, this.value);" class="form-control" id="mname" name="mname" placeholder="" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Family Name: <span style="color:red;">*</span></label>
                            <input type="text" onkeyup="capitalize(this.id, this.value);" class="form-control" id="lname" name="lname" placeholder="" required="" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Contact Number: <span style="color:red;">*</span></label>
                            <div class="row-refine row">
                                    <div class="col-3">
                                            <input class="form-control" type="text" value="+639" name="area_code" readonly="">
                                    </div>
                                    <div class="col-9">
                                            <input class="form-control" type="text" id="contact_number" name="contact_number" required maxlength="9" pattern="\d{9}" title="Please enter exactly 9 digits" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');">

                                    </div>
                                </div>
                        </div>

                        <div class="form-group">
                            <label>Gender: <span style="color:red;">*</span></label>
                            <select class="form-control" id="gender" name="gender" required="" autocomplete="off">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Birthdate: <span style="color:red;">*</span></label>
                            <input type="date" class="form-control" onchange="underAgeValidate(this.value);" id="birthdate" name="birthdate" placeholder="" required="" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Address: <span style="color:red;">*</span></label>
                            <textarea class="form-control" id="address" name="address" placeholder="" required="" autocomplete="off"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Email: <span style="color:red;">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="" required="" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Password: <span style="color:red;">*</span></label>
                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" class="form-control" id="password" name="password" placeholder="" required="" autocomplete="off">
                        </div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                          <label class="checkbox">
                              <span class="button-checkbox">
                                  <input type="checkbox" class="hidden" name="accept_terms" id="accept_terms"> By signing up, I have read and agreed to Achievers <a href="<?=base_url()?>privacy-policy" class="loginbluea" target="_blank">Policy</a> and <a href="<?=base_url()?>terms-and-conditions" class="loginbluea" target="_blank">Terms and Conditions</a>.


                              </span>
                          </label>
                          <div class="clearfix"><div class="help-block"></div></div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" id="register_button" class="btn btn-danger">Submit</button>
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                      </div>
                    </div>

                  </div>
                  </form>
                  <!-- <div class="bottomLinkMenu">
                      <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a>
                      <span class="separator">•</span>
                      <a href="#">Sign Up</a>
                      <span class="separator">•</span>
                      <a href="#" data-dismiss="modal">Close</a>
                    </div> -->
                </div>
                <script type="text/javascript">
                  function underAgeValidate(birthday){
                    // alert(birthday);
                    var optimizedBirthday = birthday.replace(/-/g, "/");

                    var myBirthday = new Date(optimizedBirthday);

                    var currentDate = new Date().toJSON().slice(0,10)+' 01:00:00';

                    var myAge = ~~((Date.now(currentDate) - myBirthday) / (31557600000));
                    // alert(myAge);
                    if(myAge < 18 || myAge > 65) {
                      alert("Age must greater than 18 and less than 65");
                      $('#register_data #birthdate').val("");
                    }

                  }
                  $(document).on('submit', '#register_data', function(event){
                    // $("#register_data #register_button").attr("disabled","disabled");
                      event.preventDefault();
                      var fname = $('#register_data #fname').val();
                      var mname = $('#register_data #mname').val();

                      var lname = $('#register_data #lname').val();
                      var contact_number = $('#register_data #contact_number').val();
                      var email = $('#register_data #email').val();
                      var password = $('#register_data #password').val();

                      var birthdate = $('#register_data #birthdate').val();
                      var address = $('#register_data #address').val();
                      var gender = $('#register_data #gender').val();




                      // var accept_terms = $('#register_data #accept_terms').val();








                      var data = {
                        'fname'     : fname,
                        'mname'   : mname,

                        'lname'   : lname,
                        'contact_number'   : contact_number,
                        'gender'   : gender,
                        'password'   : password,
                        'birthdate' : birthdate,
                        'address' : address,
                        'email' : email,
                        // 'accept_terms'   : accept_terms,

                      };
                      if (!$("#register_data #accept_terms").is(":checked")) {
                        alert("Please click agreed to Achievers Policy and Terms and Conditions.");
                      }else{
                        $.ajax({
                          type:'POST',
                          dataType:'JSON',
                          url:`<?=base_url()?>User/register_ajax`,
                          data:data,
                          success:function(datareturn)
                          {
                            if(datareturn == 1){
                              alert("Registered!");
                              location.reload();
                            }else if(datareturn == 2){
                              alert("Email Already Exist");
                            }else{
                              alert("Invalid Request!");
                            }
                          },
                        });
                      }

                  });

                </script>

          <?php } ?>



        </ul>
      </div>
    </div>
  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->




  <div class="intro intro-carousel" style="<?=($page != 'dashboard')?'display: none':''?>">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?=base_url()?>assets/image/achie.jpg)"  onclick="window.open(`<?=base_url()?>assets/image/achie.jpg`,`Preview`,`width=100%,height=auto`)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"></p>
                    <h1 class="intro-title mb-4">
                      We provide fast solution
                    </h1>
                    <!-- <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php for ($i=11; $i<16; $i++) { ?>
        <?php if ($i != 12) { ?>
          <div class="carousel-item-a intro-item bg-image" onclick="window.open(`<?=base_url()?>assets/image/warrenhouse2/<?=$i?>.jpg`,`Preview`,`width=100%,height=auto`)" style="background-size:cover;background-size: contain;background-position: right;background-image: url(assets/image/warrenhouse2/<?=$i?>.jpg);<?=($page != 'dashboard')?'display: none':''?>">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
              <div class="table-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8">
                      <!-- <div class="intro-body">
                        <p class="intro-title-top">Doral, Florida
                          <br> 78345</p>
                        <h1 class="intro-title mb-4">
                          <span class="color-b">204 </span> Rino
                          <br> Venda Road Five</h1>
                        <p class="intro-subtitle intro-price">
                          <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                        </p>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div><!-- End Intro Section -->

  <?php if(client_session_val()){ ?>
          <div style="display:none !important;position: fixed;background: #ca2e2e;color: #fff;width: 44px;height: 44px;text-align: center;line-height: 1;font-size: 16px;border-radius: 50%;right: 15px;bottom: 80px;transition: background 0.5s;z-index: 11; display: inline;">
            <a href="#" onclick="openForm();chatready()"><i class="fa fa-envelope" aria-hidden="true" style="padding-top: 12px;color: #fff;"></i></a>
          </div>

          <!-- Modal -->

              <script type="text/javascript">
            function chatready(){

              loadMsg();
              hideLoading();

              $("form#chatform").submit(function(){

                $.post(base_url+"User/update",{
                      message: $("#chatform #content").val(),
                      name: $("#chatform #name").val(),
                      action: "postmsg"
                    }, function() {

                  // $("#messagewindow").prepend("<b>"+$("#chatform  #name").val()+"</b>: "+$("#chatform  #content").val()+"<br />");

                  $("#chatform #content").val("");
                  // $("#content").focus();
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

            function addMessages(json) {
              $("#messagewindow").html("");
              $.each(json, function(i,val){
                if(val.user_type == `0`){
                  if(val.user_id_messages == `<?=client_session_val()?>`){
                    $("#messagewindow").append("<div class='chatinfodiv' style='width:100%;padding-left:30%;'><div class='chatboxmessage' title='"+val.time_date+"'><p style='color:black;'>YOU</p>"+val.message+"</div></div>");
                  }
                }else{

                  if(val.user_id_messages_to == `<?=client_session_val()?>`){
                    $("#messagewindow").append("<div class='chatinfodiv' style='width:100%;padding-right:30%;'><div class='chatboxmessage' title='"+val.time_date+"'><p style='color:black;'>"+val.EMPLOYEEUSERNAME+'</p>'+val.message+"</div></div>");
                  }

                }

              });
            }

            function loadMsg() {
              $.getJSON(base_url+"User/json_backend", function(json) {
                $("#loading").remove();
                addMessages(json);
              });

              setTimeout('loadMsg()', 4000);
            }
          </script>

  <?php }else{ ?>

    <div style="display:none !important; position: fixed;background: #ca2e2e;color: #fff;width: 44px;height: 44px;text-align: center;line-height: 1;font-size: 16px;border-radius: 50%;right: 15px;bottom: 80px;transition: background 0.5s;z-index: 11; display: inline;">
            <a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-envelope" aria-hidden="true" style="padding-top: 12px;color: #fff;"></i></a>

          </div>
  <?php } ?>

  <div class="chat-popup" id="myForm" style="    z-index: 999999;">
    <form id="chatform">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Live Chat</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="closeForm()">&times;</button>

        </div>
        <div class="modal-body">
          <div id="wrapper">
          <p id="messagewindow"><span id="loading">Loading...</span></p>
          <div id="author" style="display: none;">
          Name: <input type="text" class="form-control" id="name" value="<?=get_user_data('fname')?>_<?=get_user_data('mname')?>_<?=get_user_data('lname')?>" />
          </div>

          <div id="txt">
          Message: <textarea name="content" class="form-control" id="content" value=""></textarea>
          </div>

          <div id="contentLoading" class="contentLoading">
          <img src="#" alt="Loading data, please wait...">
          </div>



          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-danger" value="Send" />
        </div>

      </div>
    </form>
  </div>

<script type="text/javascript">
  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

  <style type="text/css">
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    /* Button used to open the chat form - fixed at the bottom of the page */
    .chatinfodiv{
      margin-bottom: 10px;
    }
    .chatboxmessage{
      background-color: rgb(96, 96, 96);
      padding: 7px 12px;
      word-break: break-word;
      color:white;
    }

    /* The popup chat - hidden by default */
    #messagewindow{
      overflow: auto;
      max-height: 50vh;
    }
    .chat-popup {
      width: 50vw;
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }

    /* Full-width textarea */
    .form-container textarea {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
      resize: none;
      min-height: 200px;
    }

    /* When the textarea gets focus, do something */
    .form-container textarea:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/send button */
    .form-container .btn {
      background-color: #04AA6D;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
    }

</style>
