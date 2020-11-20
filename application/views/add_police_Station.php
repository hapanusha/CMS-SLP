<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <!-- ./row -->
        <div class="row">
            <!--  original tab main wrapper          <div class="col-12 col-sm-6 col-lg-4">-->
            <div class="col-12 ">


                <div class="card-body">
                    <h2>Add Police Station </h2>
                    <div class="card card-info">

                        <!-- 1st tab form start -->
                        <form class="form-horizontal" name="add_police_station" novalidate="novalidate">
                            <div class="card-body">


                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Police Station Name</label><span class="required">*</span>
                                        <input type="text" ID='ps_name'name="ps_name" class="form-control" placeholder="Enter Police Station Name">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!--select--> 
                                    <div class="form-group">
                                        <label>Select the Province  </label><span class="required">*</span>
                                        <select class="form-control" id="ps_province" name="ps_province" onchange="load_district()">
                                            <option value="0">Select the Province</option>
                                            <?php
                                           $result = $this->db->get('cms_province')->result_array();
                                            foreach ($result as $value) {
                                                ?>
                                                <option value="<?php echo $value['id']; ?>"><?php echo $value['province']; ?></option>
                                             <?php }
                                            ?>
                                        </select>            
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Select the District</label><span class="required">*</span>
                                        <select class="form-control" id="ps_district" name="ps_district" onchange="load_police_division()">
                                            <option value="0">Select the District</option>
                                          
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Select the Division</label><span class="required">*</span>
                                        <select class="form-control" id="ps_division" name="ps_division">
                                            <option value="0">Select the Division</option>                          
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Address</label><span class="required">*</span>
                                        <input type="text" ID='ps_address' name="ps_address" class="form-control" placeholder="Enter  Postal Address">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Contact Number </label>
                                        <input type="number" ID='ps_officeContactNumber' name="ps_officeContactNumber" class="form-control" placeholder="Enter Office Contact Number" maxlength="10"><br><span class="required">*</span>
                                        <input type="number" ID='ps_alternativeContactNumber'name="ps_alternativeContactNumber" class="form-control" placeholder="Enter alterntive contact Number" maxlength="10"><br>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fax Number</label>
                                        <input type="number" ID='ps_faxNumber' name="ps_faxNumber" class="form-control" placeholder="Enter Office Fax Number" maxlength="10">

                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Email Address</label><span class="required">*</span>
                                        <input type="email" ID='ps_email'name="ps_email" class="form-control" placeholder="Enter Email address">
                                    </div>
                                </div>
                                
                                
<!--                                <div class="col-sm-6">
                                    select 
                                    <div class="form-group">
                                        <label>Select the Officer in charge of the police station </label><span class="required">*</span>
                                        <select class="form-control" id="ps_oic" name="ps_oic" >
                                            <option value="0">Select the OIC</option>
                                            <?php
                                           $result = $this->db->get('cms_police_officer')->result_array();
                                            foreach ($result as $value) {
                                                ?>
                                            <option value="<?php echo $value['po_id']; ?>"><?php echo $value['po_officer_number']; ?>&nbsp;<?php echo $value['po_name_with_initials']; ?>&nbsp;<?php echo $value['po_rank_id']; ?></option>
                                             <?php }
                                            ?>
                                        </select>            
                                    </div>
                                </div>-->


                                <div class="col-md-8">
                                    <!-- textarea -->
                                    <div class="form-group" >
                                        <label>Remarks</label>
                                        <textarea ID='ps_remarks' name="Remarks" class="form-control" rows="5" placeholder="Any important details about the police station"></textarea>
                                    </div>
                                </div>
                                

                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Officer in Charge (OIC)</label><span class="required">*</span>
                                            <!--<input type="text" ID='ps_oic'name="ps_oic" class="form-control" placeholder="Select the OIC">-->
                                            
                                            <select class="form-control" id="ps_oic" name="ps_oic" >
<!--                                            <option value="0">Select the Province</option>-->
                                            <?php
                                           $result = $this->db->get('cms_police_officer')->result_array();
                                            foreach ($result as $value) {
                                                ?>
                                                <option value="<?php if($value['po_id'] !=1)echo $value['po_officer_number']; ?>" > 
                                                    <?php 
                                                    if($value['po_id'] !=1){
                                                        echo $value['po_officer_number']." - ".  $value['po_name_with_initials']; 
                                                    }else{
                                                        echo 'Select Police Officer';
                                                        
                                                    }
                                                    ?>
                                                </option>
                                             <?php }
                                            ?>
                                        </select>
                                        </div>
                                    </div>







                                <br> <br>

                                <div class="col-sm-2">

                                    <button type="submit" id='submt' class="btn btn-info">Add</button>
                                    <button type="submit" id='cancel' class="btn btn-default float-right">Cancel</button>

                                </div>



                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer -->
                        </form>
                    </div>  

                </div>
                <!-- /.card -->

            </div>


        </div>
        <!-- /.row -->    

        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery/jquery.min.js"></script>

        <script>
                                           
$(document).ready(function () {
    initialdataload();

                                                
                                                
                                                //validations code
                                                $.validator.setDefaults({
            submitHandler: function () {
                alert("Form successfully submitted!");
            }
        });
        
        
        
        
        $('#add_police_station').validate({
            rules: {
                
                
                ps_name: {
                    required: true,
                    minlength: 5
                },
                
                ps_province: {
                    required: true,
                },
                
                ps_district: {
                    required: true,
                },
                                
                ps_division: {
                    required: true,
                },
                
                ps_address: {
                    required: true,
                },
                 
                ps_officeContactNumber: {
                    required: true,
                    maxlength: 10
                },
                
                ps_alternativeContactNumber: {
                   // required: true,
                    minlength: 10
                },
                
                ps_faxNumber: {
                   // required: true,
                    minlength: 10
                },
                
                ps_email: {
                    required: true,
                    email: true,
                 },
                 
                 ps_oic: {
                    required: true,
                   
                 },
                 
                
             //second tab   
                
               
               status_refNumber: {
                    required: true,
                    
               },
               
               status_nic: {
                    required: true,
                    minlength: 10
               },
               
                
               
               
                
                },
                
                
                
            messages: {
               ps_name: {
                    required: "Please provide a Name ",
                    minlength: "Your password must be at least 5 characters long"
                },
                
                ps_province: {
                    required: "Please slect a province",
                    
                },
                
                ps_district: {
                    required: "Please select a district",
                   
                },
                
                               
                ps_division: {
                    required: "Please select a division",
                   
                },
                
                ps_address: {
                    required: "Please provide a address",
                    //minlength: "Your password must be at least 5 characters long"
                },
                
                ps_officeContactNumber: {
                    required: "Please provide a Contact Number",
                    minlength: "Your Contact Number must be 10 characters long"
                },
                
                ps_alternativeContactNumber: {
                    //required: "Please provide a alternative Contact Number",
                    minlength: "Your Contact Number must be 10 characters long"
                },
                
                ps_faxNumber: {
                    //required: "Please provide a alternative Contact Number",
                    minlength: "Your fax Number must be 10 characters long"
                },
                
                
                ps_email: {
                    required: "Please enter a email address",
                    email: "Please enter a vaild email address"
                },
                
               
                
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
        
        
})
                                            $('#submt').on("click", function () {

                                                var ps_name                     = $('#ps_name').val();
                                                var ps_province                 = $('#ps_province').val();
                                                var ps_district                 = $('#ps_district').val();
                                                var ps_division                 = $('#ps_division').val();
                                                var ps_address                  = $('#ps_address').val();
                                                var ps_officeContactNumber      = $('#ps_officeContactNumber').val();
                                                var ps_alternativeContactNumber = $('#ps_alternativeContactNumber').val();
                                                var ps_faxNumber                = $('#ps_faxNumber').val();
                                                var ps_email                    = $('#ps_email').val();
                                                var ps_remarks                  = $('#ps_remarks').val();
                                                var ps_oic                      = $('#ps_oic').val(); 
                                                //var ps_province_id = $('#ps_province_id').val();
                                                
                                                //alert(ps_division);

                                                $.ajax({
                                                    url: '<?php echo base_url() ?>index.php/Add_police_stations/save_policeStation_detail',
                                                    type: 'POST',
                                                    data: {
                                                        'ps_name': ps_name,

                                                       'ps_province': ps_province,
                                                        'ps_district': ps_district,
                                                        'ps_division': ps_division,
                                                        'ps_address': ps_address,
                                                        'ps_officeContactNumber': ps_officeContactNumber,
                                                        'ps_alternativeContactNumber': ps_alternativeContactNumber,
                                                        'ps_faxNumber': ps_faxNumber,
                                                        'ps_email': ps_email,
                                                        'ps_remarks': ps_remarks,
                                                        'ps_oic': ps_oic,
                                                        //'ps_province': ps_province,

                                                    },
                                                            
                                                            
                                                    success: function (response) {

                                                        if (response != 0) {
                                                            alert('success');
                                                        } else {
                                                            alert('fail');
                                                        }

                                                    },
                                                    error: function (xhr, status, error) {

                                                    }
                                                })

                                            })

                                            function initialdataload() {
                                                $.ajax({
                                                    url: '<?php echo base_url() ?>index.php/Add_police_stations/load_data',
                                                    type: 'GET',
                                                    dataType: 'json',
                                                    content: 'application/json',
                                                    success: function (data) {

                                                        console.log(data);
                                                    }


                                                })
                                            }
                                            
                                            
//                                            function load_Police_Officers() {
//                                                $.ajax({
//                                                    url: '<?php echo base_url() ?>index.php/Add_police_stations/load_policeOfficer',
//                                                    type: 'GET',
//                                                    dataType: 'json',
//                                                    content: 'application/json',
//                                                    success: function (data) {
//
//                                                        console.log(data);
//                                                    }
//
//
//                                                })
//                                            } 


                                            function load_district() {

                                                var province = $('#ps_province').val();

                                                $.post("http://localhost/CMS/index.php/add_police_stations/load_district", {'id': province},
                                                        function (data)
                                                        {
                                                            console.log(data);
                                                            if (data == 'denied')
                                                            {
                                                                funcres = {status: "denied", message: "You have no right to proceed the action"};
                                                                result_notification(funcres);
                                                            } else
                                                            {
                                                                $('#ps_district').empty();
                                                                $('#ps_district').append($("<option value = 0>Select the District</option>"));
                                                                for (var i = 0; i < data.length; i++)
                                                                {
                                                                    $('#ps_district').append($("<option></option>").attr("value", data[i]['id']).text(data[i]['district']));
                                                                }

                                                            }
                                                        },
                                                        "json"
                                                        );

                                            }


                                            function load_police_division() {

                                                var division= $('#ps_district').val();

                                                $.post("http://localhost/CMS/index.php/add_police_stations/load_division", {'id': division},
                                                        function (data)
                                                        {
                                                            console.log(data);
                                                            if (data == 'denied')
                                                            {
                                                                funcres = {status: "denied", message: "You have no right to proceed the action"};
                                                                result_notification(funcres);
                                                            } else
                                                            {
                                                                $('#ps_division').empty();
                                                                $('#ps_division').append($("<option value = 0>Select the Division</option>"));
                                                                for (var i = 0; i < data.length; i++)
                                                                {
                                                                    $('#ps_division').append($("<option></option>").attr("value", data[i]['div_id']).text(data[i]['div_division_name']));
                                                                }

                                                            }
                                                        },
                                                        "json"
                                                        );
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

