<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//print_r($complain_data);
 
 
 
 
 ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Details of Offence - <?php echo $complain_data['c_gn_complaint_reference_number']?> <?php //echo $_SESSION['u_name']   ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Manage Offence</li>
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

            <!-- /.row -->
            <!-- TABLE: LATEST Complaints -->
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Latest Complaints</h3>

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
 <?php                            
echo $complain_data['c_gn_complaint_reference_number'] . ' ' . $complain_data['c_gn_complaint_inbrief']; 
?>
    


                

                <!-- /.card-body -->
           
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->


        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
