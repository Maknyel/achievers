

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>admin">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Achievers </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?=($page =='dashboard')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?=($page == 'users' || $page == 'agents')?'active':'';?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Users:</h6>
            <a class="collapse-item <?=($page == 'agents')?'active':'';?>" href="<?php echo base_url()?>admin/agents">Agent</a>
            <a class="collapse-item <?=($page == 'users')?'active':'';?>" href="<?php echo base_url()?>admin/users">Client</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item <?=($page=='addhouse' || $page == 'houselist' || $page=='subdivision' || $page=='sellhouse')?'active':'';?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-home"></i>
          <span>House List</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
            <!-- <a class="collapse-item <?=($page=='addhouse')?'active':'';?>" href="<?php echo base_url()?>admin/add_house">Add House</a> -->
            <a class="collapse-item <?=($page=='houselist')?'active':'';?>" href="<?php echo base_url()?>admin/houselist">House List</a>
            <a class="collapse-item <?=($page=='subdivision')?'active':'';?>" href="<?php echo base_url()?>admin/subdivision">Subdivison</a>
            <!-- <a class="collapse-item <?=($page=='sellhouse')?'active':'';?>" href="<?php echo base_url()?>admin/sellhouse">Sell House</a> -->
            <!-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a> -->
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>


      <!-- Nav Item - Charts -->
      <li style="display: none;" class="nav-item <?=($page =='file')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>admin/image">
          <i class="fas fa-fw fa-image"></i>
          <span>Upload Image</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li style="display: none;" class="nav-item <?=($page =='file_m')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>admin/fman">
          <i class="fas fa-fw fa-table"></i>
          <span>File Manager</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item <?=($page =='news')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>admin/news">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>News</span></a>
      </li>

      <li class="nav-item <?=($page =='leads')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>admin/leads">
          <i class="fas fa-fw fa-list"></i>
          <span>Leads</span></a>
      </li>

      <li class="nav-item <?=($page =='file_management')?'active':''?>">
        <a class="nav-link" href="<?=base_url()?>admin/file_management">
          <i class="fas fa-fw fa-list"></i>
          <span>File Management</span></a>
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
                            <a class="nav-link dropdown-toggle" style="display: none;" href="<?=base_url()?>admin/message">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- <span class="badge badge-danger badge-counter">7</span> -->
                            </a>                            
                        </li>

         
      
            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=get_admin_data_field('fname')?> <?=get_admin_data_field('mname')?> <?=get_admin_data_field('lname')?> </span>
                <img class="img-profile rounded-circle" src="<?=base_url()?>assets/image/agent.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item <?=($page =='profile')?'active':''?>" href="<?=base_url()?>admin/profile">
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


