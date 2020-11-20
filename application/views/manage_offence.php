

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Offence - CMS <?php //echo $_SESSION['u_name']               ?></h1>
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



                <div class="row">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr align="center">
                                    <th>#</th>
                                    <th>Reference No.</th>
                                    <th>Received Date</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Received Type</th>
                                    <th>Mobile Number</th>
                                    <th>Action</th>
                                    <th>View</th>
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
                                            <td><?= $complaints['c_gn_complaint_reference_number'] ?></td>
                                            <td><?= $complaints['c_gn_placement_date'] ?></td>
                                            <td><?= $complaints['sc_description'] ?></td>
                                            <td><?= $complaints['complaint_category'] ?></td>
                                            <td><?= $complaints['c_gn_complaint_user_type'] ?></td>
                                            <td><?= $complaints['ps_contact_number'] ?></td>



                                            <td align="center">
                                                <?php if($complaints['c_gn_status_of_complaint'] != 4){?>
                                                <button type="button" title="Complaint Status" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#complaint_status_Modal" data-rowid="<?= $complaints['c_gn_complaint_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Status</span></button>
                                                 <?php }else{?>
                                                <button type="button" title="Complaint Solved" class="btn  btn-info btn-sm" ><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Solved</span></button>
                                                <?php }?>
                                                
                                                
                                                
        <!--                                                <a class="btn btn- btn-sm" onclick="event.preventDefault();load_stueditview('<?php echo $complaints['c_gn_complaint_id']; ?>')"><span class="btn btn-info btn-sm" aria-hidden="true">Change Status</span></a>                                      -->
                                            </td>
                                            <td>
                                                <button type="button" title="Complaint View" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#complaint_view_Modal" data-rowid="<?= $complaints['c_gn_complaint_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">View</span></button>

                <!--                                                <a class="btn btn- btn-xs" onclick="event.preventDefault();complaintview('<?php echo $complaints['c_gn_complaint_id'] ?>')"><span class="btn btn-primary btn-sm" aria-hidden="true">View</span></a>-->



                                            </td>

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
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Status Change modal -->
<div  class="modal fade in" data-keyboard="false" data-backdrop="static" id="complaint_status_Modal" tabindex="-1" role="dialog" aria-labelledby="complaint_statusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="complaint_statusModalLabel">Complaint Status Change  </h5>

            </div>
            <form class="form-horizontal" role="form" method="post" id="status_update_form" autocomplete="off">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="comcode" class="col-sm-6 control-label"> Name </label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control " id="compaliner_name" name="complainer_name"  value=""  readonly> 

                                <input type="hidden" class="form-control " id="user_id" name="user_id"  value="<?php echo $_SESSION['u_id']?>" >   
                                <input type="hidden" class="form-control " id="complaint_id" name="complaint_id"  value="" > 
                                
                                

                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputEmail3" class="col-sm-6 control-label">Complaint No</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="reference_no" name="reference_no"  value="" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="comcode" class="col-sm-6 control-label"> Complaint Details  </label>
                            <div class="col-sm-12">
                                <textarea class="form-control " id="complaint_bref" name="complaint_bref"  value=""  readonly>                          
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-md-12 form-group">
                            <label for="inputEmail3" class="col-sm-6 control-label">Current Status</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="current_compalin_type" name="current_compalin_type"  value="" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="inputEmail2" class="col-sm-6 control-label">New Status</label>
                            <div class="col-sm-12">
                                <?php
                                $complain_status_drop = array('-1' => 'Select the Complaint');
                                $selected_complain = -1;

                                foreach ($result_array_complain as $status) {

                                    $complain_status_drop[$status['sc_id']] = $status['sc_description'];
                                }

                                $cat_extra_attrs = 'id="complaint_status" class="form-control" data-validation="required" data-validation-error-msg-required="Field can not be empty"';
                                echo form_dropdown('complaint_status', $complain_status_drop, $selected_complain, $cat_extra_attrs);
                                ?>       
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="comcode" class="col-sm-12 control-label"> Complaint Updates  </label>
                            <div class="col-sm-12">
                                <textarea class="form-control " id="complain_details" name="complain_details"  value="">               
                                </textarea>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="update_status" class="btn btn-primary btn-md" name="update_status" onclick="update_complain_status()">Change Status</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- end Status Change modal -->




<!-- complainant view modal -->
<div  class="modal fade in" data-keyboard="false" data-backdrop="static" id="complaint_view_Modal" tabindex="-1" role="dialog" aria-labelledby="reg_approveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="reg_approveModalLabel">Complaint Details  </h5>

            </div>
            <form class="form-horizontal" role="form" method="post" id="reg_approve_form1" autocomplete="off">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="comcode" class="col-sm-6 control-label"> Name </label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control " id="compaliner_name" name="complainer_name"  value=""  readonly> 

                                <input type="hidden" class="form-control " id="approve_inq_id" name="approve_inq_id"  value="" >                          
                                <input type="hidden" class="form-control " id="complaint_id" name="complaint_id"  value="" > 

                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputEmail3" class="col-sm-6 control-label">Complaint No</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="reference_no" name="reference_no"  value="" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="comcode" class="col-sm-6 control-label"> Complaint Details  </label>
                            <div class="col-sm-12">
                                <textarea class="form-control " id="complaint_bref" name="complaint_bref"  value=""  readonly>                          
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-md-12 form-group">
                            <label for="inputEmail3" class="col-sm-6 control-label">Current Status</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="current_compalin_type" name="current_compalin_type"  value="" readonly>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- complainant view modal -->



<script type="text/javascript">

//-----function for the status change

    $('#complaint_status_Modal').on('show.bs.modal', function (event) {
        complaint_status_form_clear();
        var button = $(event.relatedTarget);
        var recipient = button.data('rowid');
        var modal = $(this);
//alert(recipient);
        $.ajax({
            url: "<?php echo base_url('index.php/Manage_offences/get_complain_details') ?>",
            type: 'POST',

            data: {c_gn_complaint_id: recipient},

            cache: false,
            success: function (data) {

                var obj = JSON.parse(data);

                console.log(obj);

                modal.find('#complaint_id').val(obj.c_gn_complaint_id);
                modal.find('#reference_no').val(obj.c_gn_complaint_reference_number);
                modal.find('#complaint_bref').val(obj.c_gn_complaint_inbrief);
                modal.find('#compaliner_name').val(obj.cn_Name_with_initials);
                modal.find('#current_compalin_type').val(obj.sc_description);


            }
        });

    });

    function complaint_status_form_clear() {
        //alert(); 
        $('#complaint_id').val('');
        $('#reference_no').val('');
        $('#complaint_bref').val('');
        $('#compaliner_name').val('');
        $('#current_compalin_type').val('');

    }

//------------view functions------
    function complaintview(complaint_id)
    {

        window.location = '<?php echo base_url("index.php/Add_offences/view_offence") ?>?id=' + complaint_id;
    }


//----edit functions------no need for this-----
    function load_stueditview(complaint_id)
    {
        $.post("<?php echo base_url('index.php/Add_offences/set_complaint_data_session') ?>", {'complaint_id': complaint_id},
                function (data)
                {
                    if (data)
                    {
                        load_edit_page('edit');
                    }
                },
                "json"
                );
    }

    function load_edit_page(type)
    {
        window.location = '<?php echo base_url("index.php/Add_offences/complaint_edit.php") ?>?type=' + type;
    }

//-------complint view modal-----

    $('#complaint_view_Modal').on('show.bs.modal', function (event) {
        complaint_status_form_clear();
        var button = $(event.relatedTarget);
        var recipient = button.data('rowid');
        var modal = $(this);
//alert(recipient);
        $.ajax({
            url: "<?php echo base_url('index.php/Manage_offences/get_complain_details') ?>",
            type: 'POST',

            data: {c_gn_complaint_id: recipient},

            cache: false,
            success: function (data) {

                var obj = JSON.parse(data);

                console.log(obj);

                modal.find('#complaint_id').val(obj.c_gn_complaint_id);
                modal.find('#reference_no').val(obj.c_gn_complaint_reference_number);
                modal.find('#complaint_bref').val(obj.c_gn_complaint_inbrief);
                modal.find('#compaliner_name').val(obj.cn_Name_with_initials);
                modal.find('#current_compalin_type').val(obj.sc_description);


            }
        });



    });

function update_complain_status() {

   // $('.se-pre-con').show();

        $.post("<?php echo base_url('index.php/Manage_offences/update_complaint') ?>", $("#status_update_form").serialize(), function (data) {
            //var obj = JSON.parse(data);
            //$('.se-pre-con').hide();
            
            $(document).ready(function () {

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-middle',
                    showConfirmButton: false,
                    width:250,
                    timer: 300
                });


                Toast.fire({
                    type: 'success',
                    title: 'Complaint Status Updated.'

                });



            });
            
            $('#complaint_status_Modal').modal('hide');
           // funcres = {status: "success", message: " successfully Updated "};
            //notification_alert(funcres);


        })
//                .fail(function () {
//                    funcres = {status: "danger", message: "Update Failed"};
//                    //notification_alert(funcres);
//                })
//                .always(function () {
//                   // get_pending_registrstions_load();
//                });


    }


</script>
