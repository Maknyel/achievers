<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?=global_logo()?>" rel="icon">
  <link href="<?=global_logo()?>" rel="apple-touch-icon">

  <title><?=$title?></title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>assets/plugin/sb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assets/plugin/sb/css/sb-admin-2.css" rel="stylesheet">
  <script src="<?=base_url()?>assets/plugin/sb/vendor/jquery/jquery.min.js"></script>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center" style="align-items: center;height: 100vh;">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row" style="padding: 20px;">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                  </div>
                  <form class="user" id="send_password">
                    <input type="hidden" name="email" id="email" value="<?=$_GET['email']?>">
                    <div class="form-group">
                      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" name="password" class="form-control form-control-user" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" name="retypepassword" class="form-control form-control-user" id="retypepassword" placeholder="Retype Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Submit
                    </button>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->

  <script src="<?=base_url()?>assets/plugin/sb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/plugin/sb/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>assets/plugin/sb/js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
      $(document).on('submit','#send_password',function(e){
          e.preventDefault();
          var password = $('#send_password #password').val();
          var email = $('#send_password #email').val();
          var retypepassword = $('#send_password #retypepassword').val();




          var data = {
              'email':email,
              'password':password,
              'retypepassword':retypepassword,
          };
          // alert(email);
          // alert(password);
          // alert(retypepassword);
          if(password != retypepassword){
            alert("password and retype password is not matched");
          }else{
            $.ajax({
                type:'POST',
                dataType:'JSON',
                url:`<?=base_url()?>`+"set_password",
                data:data,
                success:function(data)
                {
                  alert(data['message']);
                  if(data['is_correct'] == 1){
                      window.location = `<?=base_url()?>`+'Agent';
                  }else{

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



      });
  </script>
</body>
</html>
