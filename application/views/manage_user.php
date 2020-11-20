

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Police Officers - CMS <?php //echo $_SESSION['u_name'] ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Police Officers</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
<!--            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="far fa-envelope"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Today's Complaints</span>
                            <span class="info-box-number">
                               <?php print_r($result_today[0]['today_complaints']);?>
                                
                            </span>
                        </div>
                         /.info-box-content 
                    </div>
                     /.info-box 
                </div>
                 /.col 
                 fix for small devices only 
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-tie"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Police Complaints</span>
                            <span class="info-box-number"><?php print_r($result_police[0]['police']);?></span>
                        </div>
                         /.info-box-content 
                    </div>
                     /.info-box 
                </div>
                 /.col 
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Citizen Complaints</span>
                            <span class="info-box-number"><?php print_r($result_city[0]['city']);?></span>
                        </div>
                         /.info-box-content 
                    </div>
                     /.info-box 
                </div>
                 /.col 
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-secret"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Anonymous Complaints</span>
                            <span class="info-box-number"><?php print_r($result_anonymous[0]['anoy']);?></span>
                        </div>
                         /.info-box-content 
                    </div>
                     /.info-box 
                </div>
                 /.col 
            </div>-->
            <!-- /.row -->
            <!-- TABLE: view officers -->
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Latest records of Police Officers</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
<!--                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>-->
                    </div>
                </div>
                <!-- /.card-header -->
                
                
                
                <div class="row">
                    <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                                    <th>#</th>
                                    <th>Officer No</th>
                                    <th>Name with Initials</th>
                                    <th>Rank</th>
                                    <th>Police Station</th>
                                    <th>Contact_number</th>
                                    <th>Email</th>
                                    <th>Profile picture</th>
                                    <!--<th>Action</th>-->
                </tr>
                </thead>
                <tbody>
                                <?php
                                
                                 //print_r('<pre>');
                               // print_r($result);
                                //print_r('</pre>');//$complaints['c_gn_complaint_type'].
                                $i = 1;
                                if (!empty($result)) {
                                    foreach ($result as $user) {
                                        ?>

                                        <tr>
                                            <td align="center"><?php echo $i ?></td>
                                            <td><?=$user['po_officer_number']?></td>
                                            <td><?=$user['po_name_with_initials']?></td>
                                            <td><?=$user['rank']?></td>
                                            <td><?=$user['ps_name']?></td>
                                            <td><?=$user['po_contact_number_mobile']?><br><?=$user['po_contact_number_other']?></td>
                                            <td><?=$user['po_email_address']?></td>
                                            <td>
                                            <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url()?>uploads/officer_profile/<?=$user['po_profile_picture']?>"" alt="User profile picture">
                                            
                                            </td>
                                            <!--<td></td>-->
                                            
                                            
                                            
                                        </tr>

                                        <?php
                                        $i++;
                                    }
                                }
                                ?>


                            </tbody>
                
              </table>
            </div>
                    
                </div>

                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <a href="#" class="btn btn-sm btn-secondary float-right">View All officers</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





