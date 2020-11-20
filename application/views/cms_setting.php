<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">   

        <!-- ./row -->
        <div class="row">
            <!--  original tab main wrapper          
            <div class="col-12 col-sm-6 col-lg-4">-->
            <div class="col-12 ">
                <div class="card card-primary card-tabs">
                    <h2>Set up CMS</h2>
                    <div class="card-header p-0 pt-1">

                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Complaint Types</a>
                            </li>


                            <!--Personal Details start-->


                            <!--                            <li class="nav-item" >
                                                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Personal Details</a>
                                                        </li>-->

                            <li class="nav-item" >
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Status categories of complaint</a>
                            </li>
                        </ul>
                    </div>




                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                <div class="card card-info">




                                    <!-- 1st tab form start -->
                                    <form class="form-horizontal" name="add_complaint_Types" id="add_complaint_Types" novalidate="novalidate">
                                        <div class="card-body">


                                            <!--                                           <div class="col-md-4">
                                                                                            text input 
                                                                                           <div class="form-group">
                                                                                               <label>Complaint Type ID</label><span class="required">*</span>
                                                                                               <input type="text" ID='com_id' name="com_id" class="form-control" placeholder="Complaint Type ID">
                                                                                           </div>
                                                                                       </div>-->


                                            <div class="col-md-4">
                                                <!-- textarea -->
                                                <div class="form-group" >
                                                    <label>Complaint Type</label><span class="required">*</span>
                                                    <input type="text" ID='com_type' name="com_type" class="form-control" placeholder="Enter the new Complaint Type">

                                                </div>
                                            </div>



                                            <div class="col-md-4">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Complaint Type Status</label><span class="required">*</span>

                                                    <select class="form-control" id="com_type_status" name="com_type_status" >
                                                        <option value="1" selected>Exist</option>
                                                        <option value="0">Not Exist</option>

                                                    </select>

                                                </div>
                                            </div>







                                            <br> <br>

                                            <div class="col-md-2">

                                                <button type="submit" id='submt_type' name="submt_type" class="btn btn-info">Add</button>
                                                <button type="submit" id='cancel_type' class="btn btn-default float-right">Cancel</button>

                                            </div>



                                        </div>
                                        <!-- /.card-body -->

                                        <!-- /.card-footer -->
                                    </form>
                                </div> 

                                <!-- Main content -->
                                <!-- Update complaint type table start -->

                                <section class="content">
                                    <div class="container-fluid">
                                        <!-- Info boxes -->

                                        <!-- /.row -->
                                        <!-- TABLE: LATEST Complaints -->
                                        <div class="card">
                                            <div class="card-header border-transparent">
                                                <h3 class="card-title">Update Complaint type</h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>

                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="row">
                                                <div class="card-body">
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr align="center">
                                                                <th>#</th>
                            <!--                                    <th>ID</th>-->
                                                                <th>Complaint Type</th>
                                                                <th>Status</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
//                                                            print_r('<pre>');
//                                                            print_r($result_array);//$complaints['c_gn_complaint_type'].
//                                                            print_r('</pre>');
                                                            $i = 1;
                                                            if (!empty($complaint_types)) {
                                                                foreach ($complaint_types as $complaints) {
                                                                    ?>

                                                                    <tr align="left">
                                                                        <td><?php echo $i ;?></td>
                                                                    <!--<td><?= $complaints['id'] ?></td>-->
                                                                        <td><?= $complaints['complaint_category'] ?></td>
                                                                        
<!--                                                                        <td><?= $complaints['complaint_category_status'] ?></td>-->
                                                                        
                                                                        <td>
                                                                            <? if($complaints['complaint_category_status']=1){ ?>
                                                                                <?php echo 'Exist'; ?>
                                                                               
                                                                         }else {
                                                                                    <?php echo 'Not Exist'; ?>
                                                                                    
                                                                                }
                                                                            
                                                                            
                                                                            
                                                                            
                                                                        </td>
                                                                        
                                                                        
                                                                <!--   complaint solve inactive mode setting start-->
                                                                        <td align="center">
                                                                            <?php //if ($complaints['c_gn_status_of_complaint'] != 3) { ?>
                                                                                <button type="button" title="Complaint Status" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#complaint_status_Modal" data-rowid="//<?//= $complaints['c_gn_complaint_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Status</span></button>
                                                                            <?php //} else { ?>
                                                                                <button type="button" title="Complaint Solved" class="btn  btn-info btn-sm" ><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Solved</span></button>
                                                                            <?php //} ?>



                                                                            <a class="btn btn- btn-sm" onclick="event.preventDefault();load_stueditview('<?php //echo $complaints['c_gn_complaint_id']; ?>')"><span class="btn btn-info btn-sm" aria-hidden="true">Change Status</span></a>                                      
                                                                        </td>

                                                                        <!--                                              complaint solve inactive mode setting end-->









                                                                        <!--  Complaint View inactive mode setting start--> 

        <!--                                            <td>
            <button type="button" title="Complaint View" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#complaint_view_Modal" data-rowid="<?= $complaints['c_gn_complaint_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">View</span></button>

                            <a class="btn btn- btn-xs" onclick="event.preventDefault();complaintview('<?php //echo $complaints['c_gn_complaint_id'] ?>')"><span class="btn btn-primary btn-sm" aria-hidden="true">View</span></a>



        </td>-->
                                                                        <!--  Complaint View inactive mode setting end--> 

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
                                            <!--                <div class="card-footer clearfix">
                                            
                                                                <a href="#" class="btn btn-sm btn-secondary float-right">View All Complaints</a>
                                                            </div>-->
                                            <!-- /.card-footer -->
                                        </div>
                                        <!-- /.card -->


                                    </div><!--/. container-fluid -->
                                </section>

                                <!-- Update complaint type table end -->
                                <!-- /.content -->
                            </div>





                            <!--status of complaint tab start-->
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                <div class="card card-info">

                                    <!-- 2nd tab form start -->



                                    <form class="form-horizontal" name="add_statusCategories" novalidate="novalidate">
                                        <div class="card-body">


                                            <!--                                <div class="col-md-4">
                                                                                 text input 
                                                                                <div class="form-group">
                                                                                    <label>Status ID</label><span class="required">*</span>
                                                                                    <input type="text" ID='status_id' name="status_id" class="form-control" placeholder="Status ID">
                                                                                </div>
                                                                            </div>-->


                                            <div class="col-md-4">
                                                <!-- textarea -->
                                                <div class="form-group" >
                                                    <label>Status category description</label><span class="required">*</span>
                                                    <input type="text" ID='status_description' name="status_description" class="form-control" placeholder="Enter new status">

                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <!-- textarea -->
                                                <div class="form-group" >
                                                    <label>Details</label><span class="required">*</span>
                                                    <textarea ID='status_details' name="status_details" class="form-control" rows="5" placeholder="Description of new status"></textarea>
                                                </div>
                                            </div>



                                            <div class="col-md-4">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Existence of the status</label><span class="required">*</span>

                                                    <select class="form-control" id="status_Existence" name="status_Existence" >
                                                        <option value="1" selected>Exist</option>
                                                        <option value="0">Not exist</option>

                                                    </select>

                                                </div>
                                            </div>







                                            <br> <br>

                                            <div class="col-md-2">

                                                <button type="submit" id='submt_status' name="submt_status" class="btn btn-info">Add</button>
                                                <button type="submit" id='cancel_status' name="cancel_status" class="btn btn-default float-right">Cancel</button>

                                            </div>



                                        </div>
                                        <!-- /.card-body -->

                                        <!-- /.card-footer -->
                                    </form>
                                    <!-- 2nd tab  form end -->
                                </div> 








                                <!-- status table view table start -->

                                <section class="content">
                                    <div class="container-fluid">
                                        <!-- Info boxes -->

                                        <!-- /.row -->
                                        <!-- TABLE: LATEST Complaints -->
                                        <div class="card">
                                            <div class="card-header border-transparent">
                                                <h3 class="card-title">Update Status Categories</h3>

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
                                                            <tr align="center">
                                                                <th>#</th>
                            <!--                                    <th>ID</th>-->
                                                                <th>Status Name</th>
                                                                <th>Status Details</th>
                                                                <th>Status existence</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            print_r('<pre>');
                                                            //print_r($result_array);//$complaints['c_gn_complaint_type'].
                                                            print_r('</pre>');
                                                            $i = 1;
                                                            if (!empty($result_array)) {
                                                                foreach ($result_array as $complaints) {
                                                                    ?>

                                                                    <tr align="left">
                                                                        <td><?php echo $i ?></td>
                                                                        <!--                                        
                                                                                                                    <td><?= $complaints['sc_description'] ?></td>
                                                                                                                    <td><?= $complaints['sc_details'] ?></td>
                                                                                                                    <td><?= $complaints['sc_status'] ?></td>
                                                                                                                    
                                                                        
                                                                        
                                                                                                                                         
                                                                                                                    
                                                                                                                    
                                                                        <!--                                              complaint solve inactive mode setting start-->
                                                                        <!--                                            <td align="center">
                                                                        <?php if ($complaints['c_gn_status_of_complaint'] != 3) { ?>
                                                                                                                            <button type="button" title="Complaint Status" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#complaint_status_Modal" data-rowid="//<?= $complaints['c_gn_complaint_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Status</span></button>
                                                                        <?php } else { ?>
                                                                                                                            <button type="button" title="Complaint Solved" class="btn  btn-info btn-sm" ><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Solved</span></button>
                                                                        <?php } ?>
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                                <a class="btn btn- btn-sm" onclick="event.preventDefault();load_stueditview('<?php echo $complaints['c_gn_complaint_id']; ?>')"><span class="btn btn-info btn-sm" aria-hidden="true">Change Status</span></a>                                      
                                                                                                                    </td>-->

                                                                        <!--                                              complaint solve inactive mode setting end-->









                                                                        <!--  Complaint View inactive mode setting start--> 

        <!--                                            <td>
            <button type="button" title="Complaint View" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#complaint_view_Modal" data-rowid="<?= $complaints['c_gn_complaint_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">View</span></button>

                            <a class="btn btn- btn-xs" onclick="event.preventDefault();complaintview('<?php echo $complaints['c_gn_complaint_id'] ?>')"><span class="btn btn-primary btn-sm" aria-hidden="true">View</span></a>



        </td>-->
                                                                        <!--  Complaint View inactive mode setting end--> 

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
                                            <!--                <div class="card-footer clearfix">
                                            
                                                                <a href="#" class="btn btn-sm btn-secondary float-right">View All Complaints</a>
                                                            </div>-->
                                            <!-- /.card-footer -->
                                        </div>
                                        <!-- /.card -->


                                    </div><!--/. container-fluid -->
                                </section>

                                <!-- status table view table start end -->


                            </div>
                            <!--status of complaint tab end-->

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>


        </div>
        <!-- /.row -->    















    </section>


</div>
<!-- /.content-wrapper -->








<script>

    $(document).ready(function () {
        initialdataload_ComplnTypes();



        //validations code
        $.validator.setDefaults({
            submitHandler: function () {
                alert("Form successfully submitted!");
            }
        });




        $('#add_complaint_Types').validate({
            rules: {

                //complaint type tab  


                com_type: {
                    required: true
                },

                com_type_status: {
                    required: true
                }



            },

            messages: {
                //complaint type tab  

                com_type: {
                    required: "Please enter a new complaint type",

                }


            },

            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });


    });





    $(document).ready(function () {
        initialdataload_status();



        //validations code
        $.validator.setDefaults({
            submitHandler: function () {
                alert("Form successfully submitted!");
            }
        });




        $('#add_statusCategories').validate({
            rules: {

                //complaint type tab  






                status_description: {
                    required: true

                },

                status_details: {
                    required: true

                },

                status_Existence: {
                    required: true

                }



            },

            messages: {

                //Status tab               

                status_description: {
                    required: "Please enter a new status",
                    //minlength: "Your password must be at least 5 characters long"
                },

                status_details: {
                    required: "Please provide details of the given status",

                }


            },

            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });


    });

    $('#submt_type').on("click", function () {

        var com_id = $('#com_id').val();
        var com_type = $('#com_type').val();
        var com_type_status = $('#com_type_status').val();




//                                                alert(com_id);
//                                                alert(com_type);
//                                                alert(com_type_status);

        $.ajax({
            url: '<?php echo base_url() ?>index.php/cms_settings/save_complaint_type',
            type: 'POST',
            data: {

                'com_id': com_id,
                'com_type': com_type,
                'com_type_status': com_type_status,

            },

            success: function (response) {

                if (response !== 0) {
                    alert('successfully updated the DB');
                } else {
                    alert('fail to updat the DB');
                }

            },

            error: function (xhr, status, error) {

            }
        })

    })

    $('#submt_status').on("click", function () {

        var status_id = $('#status_id').val();
        var status_description = $('#status_description').val();
        var status_details = $('#status_details').val();
        var status_Existence = $('#status_Existence').val();



//                                                alert(status_id);
//                                                alert(status_description);
//                                                alert(status_details);
//                                                alert(status_Existence);


        $.ajax({
            url: '<?php echo base_url() ?>index.php/Cms_settings/save_status',
            type: 'POST',
            data: {

                'status_id': status_id,
                'status_description': status_description,
                'status_details': status_details,
                'status_Existence': status_Existence,

            },

            success: function (response) {

                if (response !== 0) {
                    alert('successfully updated the DB');
                } else {
                    alert('fail to updat the DB');
                }

            },
            error: function (xhr, status, error) {

            }
        })

    })

    function initialdataload_ComplnTypes() {
        $.ajax({
            url: '<?php echo base_url() ?>index.php/Cms_settings/load_data_complaintTypes',
            type: 'GET',
            dataType: 'json',
            content: 'application/json',
            success: function (data) {

                console.log(data);
            }


        })
    }


    function initialdataload_status() {
        $.ajax({
            url: '<?php echo base_url() ?>index.php/Cms_settings/load_data_status',
            type: 'GET',
            dataType: 'json',
            content: 'application/json',
            success: function (data) {

                console.log(data);
            }


        })
    }




</script>
<style>

    .required
    {
        color: red;
    }
</style>












</section>



</div>
<!-- /.content-wrapper -->

