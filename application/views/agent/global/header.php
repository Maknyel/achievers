<!DOCTYPE html>
<html lang="en">

<head>
    <script>
      var base_url = `<?php echo base_url(); ?>`;
    </script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?=global_logo()?>" rel="icon">
  <link href="<?=global_logo()?>" rel="apple-touch-icon">

  <title><?=$title?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>assets/plugin/sb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assets/plugin/sb/css/sb-admin-2.css" rel="stylesheet">
  <?php if($page == 'lead_demographics' || $page == 'subdivision' || $page == 'file_m' || $page == 'news' || $page == 'houselist' || $page == 'users' || $page == 'agents' || $page == 'sellhouse' || $page == 'myplans' || $page == 'leads' || $page == 'agent_performance'){ ?>
    <link href="<?=base_url()?>assets/plugin/sb/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.css">
  <?php } ?>


  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/dropzone/min/dropzone.min.css" />
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dropzone/min/dropzone.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/files/admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="http://malsup.github.com/jquery.form.js"></script> -->
  <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/app.js"></script> -->
</head>