<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Police Stations - CMS <?php //echo $_SESSION['u_name']      ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Police Stations</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- TABLE: Police Stations -->
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Police Stations</h3>

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
                                    <th width="5%">#</th>
                                    <th width="15%">Station Name</th>
                                    <th width="10%">District</th>
                                    <th width="15%">Address</th>
                                    <th width="10%">Contact Number</th>
                                    <th width="10%">Fax Type</th>
                                    <th width="10%">Email</th>
                                     <th width="10%">OIC</th>
                                    <th width="15%">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //$complaints['c_gn_complaint_type'].
//                                print_r('<pre>');
//                                 //print_r($result_array[0]['ps_existance']);
//                                print_r($result_array);
//                                print_r('</pre>');

                                $i = 1;
                                if (!empty($result_array)) {
                                    foreach ($result_array as $policeSta) {
                                        if ($policeSta['ps_existance'] != 0) {
                                            ?>

                                            <tr>
                                                <td width="5%"><a href="#"><?= $i ?></a></td>
                                                <td><?= $policeSta['ps_name'] ?></td>
                                                <td><?= $policeSta['district'] ?></td>
                                                <td><?= $policeSta['ps_address'] ?></td>
                                                <td><?= $policeSta['ps_contact_number'] ?><br><?= $policeSta['ps_contact_number_other'] ?></td>
                                                <td><?= $policeSta['ps_fax'] ?></td>
                                                 <td><?= $policeSta['ps_email'] ?></td>
                                                <td><?= $policeSta['po_name_with_initials'] ?></td>
                                                
                                               



                                                <td align="center">

                                                    <button type="button" title="ps edit" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#ps_edit_modal" data-rowid="<?= $policeSta['ps_police_station_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Edit</span></button>
                                                    


<!--                                                    <button type="button" title="ps delete" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#ps_delete_modal" data-rowid="<?= $policeSta['ps_police_station_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Delete</span></button>-->



                                                </td>



                                            </tr>

                                            <?php
                                            $i++;
                                        }
                                    }
                                }
                                ?>


                            </tbody>

                        </table>
                    </div>

                </div>

                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <a href="#" class="btn btn-sm btn-secondary float-right">View All Complaints</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->


        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- ps edit modal start -->
<div  class="modal fade in" data-keyboard="false" data-backdrop="static" id="ps_edit_modal" tabindex="-1" role="dialog" aria-labelledby="ps_edit_modal_label1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="complaint_statusModalLabel">Edit Police Station  </h5>

            </div>
            <form class="form-horizontal" role="form" method="post" id="ps_edit_form" autocomplete="off">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name" class="col-sm-6 control-label"> Name </label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control " id="ps_name" name="ps_name"  value=""  readonly> 

                                <input type="hidden" class="form-control " id="user_id" name="user_id"  value="<?php echo $_SESSION['u_id'] ?>" >   
                                <input type="hidden" class="form-control " id="modified_date" name="modified_date"  value="<?php echo date("Y-m-d h:i:s") ?>" > 
                                <input type="hidden" class="form-control " id="ps_police_station_id" name="ps_police_station_id"  value="" > 
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="Address" class="col-sm-6 control-label"> Address  </label>
                            <div class="col-sm-12">
                                <textarea class="form-control " id="ps_address" name="ps_address"  value=""  >                          
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-md-6 form-group">
                            <label for="ContactNumber" class="col-sm-6 control-label">Contact Number</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="ps_contact_number" name="ps_contact_number"  value="" >
                            </div>
                        </div>
                   <div class="col-md-6 form-group">
                            <label for="Contact NumberM" class="col-sm-6 control-label">Contact Number (Mobile)</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="ps_contact_number_m" name="ps_contact_number_m"  value="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-md-6 form-group">
                            <label for="faxNumber" class="col-sm-6 control-label">Fax Number</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="ps_fax" name="ps_fax"  value="" >
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="remarks" class="col-sm-6 control-label"> Remarks  </label>
                            <div class="col-sm-12">
                                <textarea class="form-control " id="ps_remarks" name="ps_remarks"  value=""  >                          
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">  

                        <div class="col-md-6 form-group">
                            <label for="psProvince" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="ps_province_id" name="ps_province_id"  value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="psDistrict" class="col-sm-6 control-label">District</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="ps_District" name="ps_District"  value="" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">  
                        <div class="col-md-6 form-group">
                            <label for="psDivision" class="col-sm-6 control-label">Division</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="ps_Division" name="ps_Division"  value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="psOIC" class="col-sm-6 control-label">Officer in Charge (OIC)</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="ps_oic" name="ps_oic"  value="" >
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="ps_edit_btn" class="btn btn-primary btn-md" name="ps_edit_btn" onclick="update_policeStations()">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- end ps edit modal -->


<script type="text/javascript">

//-----function for the status change

    $('#ps_edit_modal').on('show.bs.modal', function (event) {
        ps_edit_form_clear();
        var button = $(event.relatedTarget);
        var recipient = button.data('rowid');
        var modal = $(this);
//alert(recipient);
        $.ajax({
            url: "<?php echo base_url('index.php/Manage_police_stations/get_policeStation_details') ?>",
            type: 'POST',

            data: {ps_police_station_id: recipient},

            cache: false,
            success: function (data) {

                var obj = JSON.parse(data);

                console.log(obj);
                
                
                modal.find('#ps_police_station_id').val(obj.ps_police_station_id);
                modal.find('#ps_name').val(obj.ps_name);
                modal.find('#ps_address').val(obj.ps_address);
                modal.find('#ps_contact_number').val(obj.ps_contact_number);
                modal.find('#ps_contact_number_m').val(obj.ps_contact_number_other);
                modal.find('#ps_email').val(obj.ps_email);
                modal.find('#ps_fax').val(obj.ps_fax);
                modal.find('#ps_province_id').val(obj.province);
                modal.find('#ps_District').val(obj.district);
                modal.find('#ps_Division').val(obj.div_division_name);
                modal.find('#ps_remarks').val(obj.ps_remarks);
                modal.find('#ps_oic').val(obj.po_officer_number);
                
                
                
                


            }
        });

    });

    function ps_edit_form_clear() {
        //alert(); 
        $('#ps_address').val('');
        $('#ps_contact_number').val('');
        $('#ps_contact_number_m').val('');
        $('#ps_fax').val('');
        $('#ps_remarks').val('');
        
        
        
                
               // modal.find('#ps_oic').val(obj.po_officer_number);

    }

function update_policeStations() {

   // $('.se-pre-con').show();

        $.post("<?php echo base_url('index.php/Manage_police_stations/update_police_station') ?>", $("#ps_edit_form").serialize(), function (data) {
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
            
            $('#ps_edit_modal').modal('hide');
           // funcres = {status: "success", message: " successfully Updated "};
            //notification_alert(funcres);
        })
    }


</script>





