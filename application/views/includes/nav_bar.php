
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url() ?>index.php/dashboards" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url() ?>index.php/dashboards" class="nav-link">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url() ?>index.php/" class="nav-link">Complaint Status</a>
        </li>

    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="dropdown nav-item">
            <a data-toggle="dropdown" class="" href="#">
                <span class="username" style="padding-right: 10px;">Welcome <?php print_r($_SESSION['u_name']) ?></span>
            </a>

        </li>
        <li>
            <a href="<?php echo base_url('index.php/login/logout') ?>"><i class="icon_key_alt"></i>  Log Out</a>
        </li>
        <!-- user login dropdown end -->
    </ul>



</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/Sri_Lanka_Police_logo.svg.png" alt="Police Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SLP - CMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!--      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="<?php echo base_url() . "assets/"; ?>#" class="d-block">Alexander Pierce</a>
                </div>
              </div>-->
        <?php $user_roal = $this->session->userdata('u_group'); ?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
<!--                    <a href="<?php echo base_url() . "index.php/dashboards/"; ?>#" class="nav-link active">
                        <i class="fas fa-chevron-circle-down"></i>
                        <p>
                            CMS - Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>-->
                    <ul class="nav nav-treeview">

                        <?php if ($user_roal == ROLE_NORMAL_USER || $user_roal == ROLE_ADMIN_USER || $user_roal == ROLE_MANAGER_USER) { ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/profiles_view" class="nav-link active">
                                <i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;
                                <p>Profile</p>
                            </a>
                        </li>
                        <?php }?>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/dashboards" class="nav-link active">
                                <i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;&nbsp;
                                <p>Dashboard</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <?php //if ($user_roal == ROLE_SUPER_USER || $user_roal == ROLE_ADMIN_USER || $user_roal == ROLE_MANAGER_USER) { ?>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;
                        <p>
                            Complaints
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/add_offences" class="nav-link">
                                <i class="fas fa-plus-square"></i>&nbsp;&nbsp;&nbsp;
                                <p>Add Offence</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/manage_offences" class="nav-link">
                                <i class="fa fa-search"></i>&nbsp;&nbsp;&nbsp;
                                <p>View Offence</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php //} ?>
                <?php if ($user_roal == ROLE_SUPER_USER || $user_roal == ROLE_ADMIN_USER || $user_roal == ROLE_MANAGER_USER) { ?>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users"></i>
                            <p>
                                Officers
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php/add_users" class="nav-link"> 
                                    <i class="fas fa-user-plus"></i>&nbsp;&nbsp;&nbsp;
                                    <p>Add Officer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php/manage_users" class="nav-link">
                                    <i class="fa fa-search"></i>&nbsp;&nbsp;&nbsp;
                                    <p>View Officers</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <?php if ($user_roal == ROLE_SUPER_USER || $user_roal == ROLE_ADMIN_USER || $user_roal == ROLE_MANAGER_USER) { ?>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="fas fa-building"></i>&nbsp;&nbsp;&nbsp;
                            <p>
                                Police Stations
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if ($user_roal == ROLE_SUPER_USER) { ?>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>index.php/add_police_stations" class="nav-link">
                                        <i class="fas fa-plus-square"></i>&nbsp;&nbsp;&nbsp;
                                        <p>Add Station</p>
                                    </a>
                                </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php/manage_police_stations" class="nav-link">
                                    <i class="fa fa-search"></i>&nbsp;&nbsp;&nbsp;
                                    <p>View Stations</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <?php if ($user_roal == ROLE_SUPER_USER || $user_roal == ROLE_ADMIN_USER || $user_roal == ROLE_MANAGER_USER) { ?>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-print"></i>
                            <p>
                                REPORTS
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php/report/report_offencesByMe" class="nav-link">
                                    <i class="far fa-file-alt"></i>&nbsp;&nbsp;&nbsp;
                                    <p>Complaints added by me</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php/report/report_offences" class="nav-link">
                                    <i class="far fa-file-alt"></i>&nbsp;&nbsp;&nbsp;
                                    <p>Complaints Details</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php/solved" class="nav-link">
                                    <i class="far fa-file-alt"></i>&nbsp;&nbsp;&nbsp;
                                    <p>Solved Complaints</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php/solved" class="nav-link">
                                    <i class="far fa-file-alt"></i>&nbsp;&nbsp;&nbsp;
                                    <p>complaints- devision-wise </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php/solved" class="nav-link">
                                    <i class="far fa-file-alt"></i>&nbsp;&nbsp;&nbsp;
                                    <p>complaints- category-wise </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php/solved" class="nav-link">
                                    <i class="far fa-file-alt"></i>&nbsp;&nbsp;&nbsp;
                                    <p>summary of a complaint </p>
                                </a>
                            </li>


                        </ul>
                    </li>
                <?php } ?>
                <?php if ($user_roal == ROLE_SUPER_USER) { ?>  
                    <?php //if ($user_roal == ROLE_SUPER_USER || $user_roal == ROLE_NORMAL_USER) { ?> 
                    <li class="nav-item menu-open"  >
                        <a href="<?php echo base_url(); ?>index.php/Cms_settings" class="nav-link">
                            <i class="fas fa-cogs"></i>&nbsp;&nbsp;&nbsp;
                            <p>
                                Settings
    <!--                            <i class="fas fa-angle-left right"></i>-->
                            </p>
                        </a>
                        <!--                    <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?php echo base_url(); ?>index.php/Cms_settings" class="nav-link">
                                                        <i class="fas fa-plus-square"></i>&nbsp;&nbsp;&nbsp;
                                                        <p>Add Complaint Categories </p>
                                                    </a>
                                                </li>
                                               
                                            </ul>-->
                    </li>

                <?php } ?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>