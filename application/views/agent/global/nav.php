

<body id="page-top">
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60d918517f4b000ac039d563/1f980e00d';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>agent">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Achievers </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?=($page =='dashboard')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>agent">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item <?=($page =='agent_performance')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>agent/agent_performance">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Agent's Performance</span></a>
      </li>
      <!-- <li class="nav-item <?=($page =='projected_sales')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>agent/projected_sales">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Projected Sales</span></a>
      </li> -->
      <li class="nav-item <?=($page =='lead_demographics')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>agent/lead_demographic">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Lead Demographic</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <li class="nav-item <?=($page =='users')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>Agent/users">
          <i class="fas fa-fw fa-list"></i>
          <span>Client</span></a>
      </li>


      <li class="nav-item <?=($page =='create_email_campaign')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>Agent/create_email_campaign">
          <i class="fas fa-fw fa-list"></i>
          <span>Create Email Campaign</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item <?=($page == 'users' || $page == 'agents')?'active':'';?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Users:</h6>
            <a class="collapse-item <?=($page == 'users')?'active':'';?>" href="<?php echo base_url()?>Agent/users">Users</a>
          </div>
        </div>
      </li> -->

      <li class="nav-item <?=($page =='houselist')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>Agent/houselist">
          <i class="fas fa-fw fa-list"></i>
          <span>House List</span></a>
      </li>

      <li class="nav-item <?=($page =='leads')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>Agent/leads">
          <i class="fas fa-fw fa-list"></i>
          <span>Leads</span></a>
      </li>

      <li class="nav-item <?=($page =='file_management')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>Agent/file_management">
          <i class="fas fa-fw fa-list"></i>
          <span>File Management</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item <?=($page=='addhouse' || $page == 'houselist')?'active':'';?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-home"></i>
          <span>House List</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?=($page=='houselist')?'active':'';?>" href="<?php echo base_url()?>Agent/houselist">House List</a>
            
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider" style="display: none;">

      <!-- Heading -->
      <div class="sidebar-heading" style="display: none;">
        Addons
      </div>


      <!-- Nav Item - Charts -->
      <li style="display: none;" class="nav-item <?=($page =='file')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>Agent/image">
          <i class="fas fa-fw fa-image"></i>
          <span>Upload Image</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li style="display: none;" class="nav-item <?=($page =='file_m')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>Agent/fman">
          <i class="fas fa-fw fa-table"></i>
          <span>File Manager</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li style="display: none;" class="nav-item <?=($page =='news')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>Agent/news">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>News</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

         

            <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle"  style="display: none;" href="<?=base_url()?>agent/message">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- <span class="badge badge-danger badge-counter">7</span> -->
                            </a>                            
                        </li>
      
            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=get_agent_data_field('fname')?> <?=get_agent_data_field('mname')?> <?=get_agent_data_field('lname')?> </span>
                <?php if(get_agent_data_field('image') != ''){ ?>
                        <img src = "<?=base_url()?>users/<?=get_agent_data_field('emp_id')?>/<?=get_agent_data_field('image')?>" id = "blah" class="img-profile rounded-circle"/>
                    <?php }else{ ?>
                        <img src = "<?=base_url()?>assets/image/agent.png" id = "blah" class="img-profile rounded-circle"/>
                    <?php } ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item <?=($page =='profile')?'active':''?>" href="<?=base_url()?>agent/profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
