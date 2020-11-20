<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>

</script>
<!-- Main content -->
<div class="content">
    <div class="container">

        <!-- ./row -->
        <div class="row">
            <!--  original tab main wrapper          <div class="col-12 col-sm-6 col-lg-4">-->
            <div class="col-12 ">
                <div class="card card-primary card-tabs">
                    <!--                    <h2>Complaint</h2>-->
                    <input type="hidden" class="form-control " id="tab-val" name="tab-val"  value="<?php echo $tab; ?>"  readonly> 
                    <div class="card-header p-0 pt-1">

                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Make the Complaint</a>

                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Status of the Complaint</a>

                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">

                                <div class="card card-info">

                                    <!-- 1st tab form start -->
                                    <form class="form-horizontal" name="add_citizen" id="add_citizen">
                                        <div class="card-body">



                                            <div class="col-sm-6">
                                                <!-- radio -->
                                                <div class="form-group">
                                                    <label>Title</label><span class="required">*</span>

                                                    <div class="form-check">
                                                        <input id='u_title' value="0" class="form-check-input" type="radio" name="u_title" >
                                                        <label class="form-check-label">Mr. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input id='u_title' value="1" class="form-check-input" type="radio" name="u_title" >
                                                        <label class="form-check-label">Mrs. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input id='u_title' value="2" class="form-check-input" type="radio" name="u_title" >
                                                        <label class="form-check-label">Ms. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input id='u_title' value="3" class="form-check-input" type="radio" name="u_title" >
                                                        <label class="form-check-label">Rev. </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <!--                                            <div class="col-sm-6">
                                                                                             text input 
                                                                                            <div class="form-group">
                                                                                                <label>Name with Initials </label>
                                                                                                <input type="text" id='nameWithInitials' class="form-control error" data-validation='required' data-validation-error-msg-required='Field cannot be empty'  required data-validation-has-keyup-event='true'  placeholder="Enter Name with Initials">
                                                                                            </div>
                                                                                        </div>-->

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Name with Initials </label><span class="required">*</span>
                                                    <input type="text" id='nameWithInitials' name="nameWithInitials" class="form-control" placeholder="Enter Name with Initials">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Calling Name</label><span class="required">*</span>
                                                    <input type="text" id='callingName' name="callingName" class="form-control" placeholder="Enter your calling Name">
                                                </div>
                                            </div>



                                            <div class="col-sm-6">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>Address</label><span class="required">*</span>
                                                    <textarea id='address' name="address" class="form-control" rows="3" placeholder="Your Address"></textarea>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>NIC</label><span class="required">*</span>
                                                    <input type="text" id='nic' name="nic" class="form-control" placeholder="Enter NIC" maxlength="12">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input type="number" id='contactNumber' name="contactNumber" class="form-control" placeholder="Enter Contact Number" maxlength="10"><br>

                                                    <input type="number" id='contactNumberother' name="contactNumberother" class="form-control" placeholder="Enter an Alternative Contact Number" maxlength="10">
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="email" id='emailAdd' name="emailAdd" class="form-control" placeholder="Enter Email">
                                                </div>
                                            </div>





                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label>Select the Province  </label><span class="required">*</span>

                                                    <select class="form-control" id="province" name="province" onchange="load_district()">
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
                                                    <label>Complainer District</label><span class="required">*</span>


                                                    <select class="form-control" id="distric" name="distric" onchange="load_ps()">
                                                        <option value="0">Select the District</option>

                                                    </select>

                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Nearest Police station</label><span class="required">*</span>


                                                    <select class="form-control" id="p_station"ps name="p_station" >
                                                        <option value="0">Select the Police Station</option>

                                                    </select>

                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label>The Police station to which you want to make the complaint </label><span class="required">*</span>

                                                    <select class="form-control" id="toWhichStation" name="toWhichStation" >
                                                        <option value="0">Select the police station</option>
                                                        <?php
                                                        $result = $this->db->get('cms_police_station')->result_array();
                                                        foreach ($result as $value) {
                                                            ?>
                                                            <option value="<?php echo $value['ps_police_station_id']; ?>"><?php echo $value['ps_name']; ?></option>
                                                        <?php }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>


                                           

                                         



                                            <div class="col-md-8">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>location related to the complaint</label>
                                                    <textarea id='location'name="location" class="form-control" rows="4" placeholder="Enter exact address or give enough details to trace the place"></textarea>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Complaint Type</label><span class="required">*</span>

                                                    <select class="form-control" id="comType" name="comType" >
                                                        
                                                        <option value="0">Select the complaint Category</option>
                                                        <?php
                                                        $result = $this->db->get('cms_complaint_type')->result_array();
                                                        foreach ($result as $value) {
                                                            ?>
                                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['complaint_category']; ?></option>
                                                        <?php }
                                                        ?>
                                                    </select>


                                                </div>
                                            </div>

                                           


                                            <div class="col-md-8">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>Your complain in brief</label><span class="required">*</span>
                                                    <textarea id='comInBrief' name="comInBrief" class="form-control" rows="8" placeholder="Write your complain in brief"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <!--                    <div class="form-group">-->
                                                <label>Attachment <label form-check-label></label></label>
                                                <p>(You can attach any file for evidence or explanation, If any.)</p>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" id='attchment' name="attchment" class="custom-file-input" >
                                                        <label class="custom-file-label" for="attachment">Choose the file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="attachment"><B>Upload</b></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <br> <br>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="nortification" name="nortification">
                                                <label class="form-check-label" for="nortification">notification about status of the complaint</label>
                                            </div>



                                            <br>
                                            <div class="col-sm-2">

                                                <button type="submit" id='submt' name="submt" class="btn btn-info">Submit</button>
                                                <button type="submit" id='cancel' name="cancel" class="btn btn-default float-right">Cancel</button>

                                            </div>

                                            <!-- hidden field: user type's to the add complaint table --> 

                                            <input type="hidden" id='asYouUserType' name="asYouUserType" class="form-control" value="By Citizen">
                                        </div>
                                        <!-- /.card-body -->
                                        <!-- /.card-footer -->
                                    </form>
                                </div>  
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                <div class="card card-info">

                                    <!-- 2nd tab (Status tab) form start -->
                                    <form class="form-horizontal">
                                        <div class="card-body">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Complaint Reference Number</label>
                                                    <input type="text" id="complaint_ref" name="complaint_ref" class="form-control" placeholder="Enter the Complaint Reference Number here">
                                                </div>
<!--                                                <div class="form-group">
                                                    <label>National Identity Card Number</label>
                                                    <input type="text" id="compliner_id" name="compliner_id" class="form-control" placeholder="Enter the NIC Number here">
                                                </div>-->
                                            </div>
                                            <br>
                                            <div class="col-md-3">                                                                                       
                                                <button type="button" id="com_view" title="Complaint View" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#complaint_view" data-rowid="<?php echo '1'; ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true">Show the Status</span></button>
                                            </div>

                                        </div> 
                                    </form>
                                </div>                  
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.row -->   
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- complainant view modal -->
<div  class="modal fade in" data-keyboard="false" data-backdrop="static" id="complaint_view" tabindex="-1" role="dialog" aria-labelledby="reg_approveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="complaint_lable">Complaint Details  </h5>

            </div>
            <form class="form-horizontal" role="form" method="post" id="complaint_lable" autocomplete="off">
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
                            <label for="comcode" class="col-sm-6 control-label"> Complaint Type</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control"    id="complaint_type" name="complaint_type"  value="" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="comcode" class="col-sm-6 control-label"> Complaint</label>
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

<!--<script src="<?php echo base_url() . "assets/"; ?>plugins/jquery/jquery.min.js"></script>-->

<script>

//    $(document).ready(function () {
//        initialdataload();
//    })

$(document).ready(function () {
                                                //initialdataload();
                                                
                                                
                                                var active_tab=$('#tab-val').val();
if(active_tab=="complaint")
$('.nav-tabs a[href="#custom-tabs-one-profile"]').tab('show');
if(active_tab=="AsYou")
$('.nav-tabs a[href="#custom-tabs-one-home"]').tab('show');


                                                //validations code
                                                $.validator.setDefaults({
                                                    submitHandler: function () {
                                                        alert("Form successfully submitted!");
                                                    }
                                                });




                                                $('#add_citizen').validate({
                                                    rules: {
                                                        

                                                        nameWithInitials: {
                                                            required: true

                                                        },

                                                        u_title: {
                                                            required: true,
                                                        },

                                                        callingName: {
                                                            required: true,
                                                            minlength: 3
                                                        },

                                                       

                                                        province: {
                                                            required: true,
                                                        },

                                                        distric: {
                                                            required: true,
                                                        },

                                                        p_station: {
                                                            required: true,
                                                        },

                                                        toWhichStation: {
                                                            required: true,
                                                        },

                                                        nic: {
                                                            required: true,
                                                            minlength: 10
                                                        },

                                                        contactNumber: {
                                                            required: true,
                                                            maxlength: 10
                                                        },

                                                        contactNumberother: {
                                                            // required: true,
                                                            maxlength: 10
                                                            


                                                        },
                                                        emailAdd: {
                                                            required: true,
                                                            email: true,
                                                        },

                                                        
                                                        address: {
                                                            required: true,
                                                        },

                                                        

                                                        comType: {
                                                            required: true,
                                                        },

                                                        comInBrief: {
                                                            required: true,
                                                        },

                                                    },

                                                    messages: {
                                                        
                                                        

                                                        nameWithInitials: {
                                                            required: "Please provide a officer Name with initials",
                                                            minlength: "Your password must be at least 5 characters long"
                                                        },

                                                        emailAdd: {
                                                            required: "Please enter a email address",
                                                            email: "Please enter a vaild email address"
                                                        },

                                                        u_title: {
                                                            required: "Please Select a tille",

                                                        },

                                                        callingName: {
                                                            required: "Please provide a calling name for officer",
                                                            minlength: "Your password must be at least 3 characters long"
                                                        },

                                                        off_rank: {
                                                            required: "Please slect a rank",

                                                        },

                                                        province: {
                                                            required: "Please slect a province",

                                                        },

                                                        distric: {
                                                            required: "Please select a district",

                                                        },

                                                        toWhichStation: {
                                                            required: "Please select a division",

                                                        },

                                                        p_station: {
                                                            required: "Please select a police station",

                                                        },

                                                        nic: {
                                                            required: "Please provide a NIC",
                                                            minlength: "Your NIC must be 10 characters long"
                                                                    // maxlength: "Your NIC must be 10 characters long"
                                                        },

                                                        contactNumber: {
                                                            required: "Please provide a Contact Number",
                                                            minlength: "Your Contact Number must be 10 characters long"
                                                        },

                                                        contactNumberother: {
                                                            //required: "Please provide a alternative Contact Number",
                                                            minlength: "Your Contact Number must be 10 characters long"
                                                        },

                                                        comType: {
                                                            required: "Please provide a town in your address",
                                                            //minlength: "Your password must be at least 5 characters long"
                                                        },

                                                        address: {
                                                            required: "Please provide a officer Name with initials",
                                                            //minlength: "Your password must be at least 5 characters long"
                                                        },

                                                        comInBrief: {
                                                            required: "Please provide a officer Name with initials",
                                                            // minlength: "Your password must be at least 5 characters long"
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


                                                $("#add_police_officer").submit(function (e) {
                                                    e.preventDefault();
                                                    var formData = new FormData($("#add_police_officer")[0]);

                                                    $.ajax({
                                                        url: $("#add_police_officer").attr('action'),
                                                        dataType: 'json',
                                                        type: 'POST',
                                                        data: formData,
                                                        contentType: false,
                                                        processData: false,
                                                        success: function (resp) {
                                                            console.log(resp);
                                                            

                                                        }
                                                    });
                                                    
                                                    e.preventDefault();
                                                });




                                            });


                                                        $('#submt').on("click", function () {

                                                            var u_title = $("input[name='u_title']:checked").val();
                                                            var nameWithInitials = $('#nameWithInitials').val();
                                                            var callingName = $('#callingName').val();
                                                            var address = $('#address').val();
                                                            var nic = $('#nic').val();
                                                            var contactNumber = $('#contactNumber').val();
                                                            var contactNumberother = $('#contactNumberother').val();
                                                            var emailAdd = $('#emailAdd').val();
                                                            var province = $('#province').val();
                                                            var distric = $('#distric').val();
                                                            var p_station = $('#p_station').val();
                                                            
                                                            var asYouUserType = $('#asYouUserType').val();
                                                            var toWhichStation = $('#toWhichStation').val();
                                                            var location = $('#location').val();
                                                            var comType = $('#comType').val();
                                                            var comInBrief = $('#comInBrief').val();
                                                            var attachment = $('#attachment').val();
                                                            var nortification = $('#nortification').val();
                                                            

                                                            //alert(u_title);
                                                            $.ajax({
                                                                url: '<?php echo base_url() ?>index.php/Make_a_complaints_as_you/save_normalUser_detail',
                                                                type: 'POST',
                                                                data: {
                                                                    'u_title': u_title,
                                                                    'nameWithInitials': nameWithInitials,
                                                                    'callingName': callingName,
                                                                    'address': address,
                                                                    'nic': nic,
                                                                    'contactNumber': contactNumber,
                                                                    'contactNumberother': contactNumberother,
                                                                    'emailAdd': emailAdd,
                                                                    'province': province,
                                                                    'distric': distric,
                                                                    'p_station': p_station,
                                                                    'asYouUserType': asYouUserType,
                                                                    'toWhichStation': toWhichStation,
                                                                    'location': location,
                                                                    'comType': comType,
                                                                    'comInBrief': comInBrief,
                                                                    'attachment': attachment,
                                                                    'nortification': nortification
                                                                   
                                                                },
                                                                success: function (response) {

                                                                    if (response != 0) {
                                                                        alert('successfully added to the DB');
                                                                    } else {
                                                                        alert('failed to add to the DB');
                                                                    }

                                                                },
                                                                error: function (xhr, status, error) {

                                                                }
                                                            })

                                                        })
                                                        
                                                        
                                                        
                                                        function load_district() {

                                                            var province = $('#province').val();

                                                            $.post("http://localhost/CMS/index.php/make_a_complaints_as_you/load_district", {'id': province},
                                                                    function (data)
                                                                    {
                                                                        console.log(data);
                                                                        if (data == 'denied')
                                                                        {
                                                                            funcres = {status: "denied", message: "You have no right to proceed the action"};
                                                                            result_notification(funcres);
                                                                        } else
                                                                        {
                                                                            $('#distric').empty();
                                                                            $('#distric').append($("<option value = 0>Select the District</option>"));
                                                                            for (var i = 0; i < data.length; i++)
                                                                            {
                                                                                $('#distric').append($("<option></option>").attr("value", data[i]['id']).text(data[i]['district']));
                                                                            }

                                                                        }
                                                                    },
                                                                    "json"
                                                                    );

                                                        }

                                                        function load_ps() {
                                                            var district = $('#distric').val();
                                                            //alert(district);
                                                            $.post("http://localhost/CMS/index.php/make_a_complaints_as_you/load_police_station", {'id': district},
                                                                    function (data)
                                                                    {
                                                                        console.log(data);
                                                                        if (data == 'denied')
                                                                        {
                                                                            funcres = {status: "denied", message: "You have no right to proceed the action"};
                                                                            result_notification(funcres);
                                                                        } else
                                                                        {
                                                                            $('#p_station').empty();
                                                                            $('#p_station').append($("<option value = 0>Select the Police Station</option>"));
                                                                            for (var i = 0; i < data.length; i++)
                                                                            {
                                                                                $('#p_station').append($("<option></option>").attr("value", data[i]['ps_police_station_id']).text(data[i]['ps_name']));
                                                                            }
                                                                        }
                                                                    },
                                                                    "json"
                                                                    );

                                                        }

//    function initialdataload() {
//        $.ajax({
//            url: '<?php echo base_url() ?>index.php/Make_a_complaints_as_you/load_data',
//            type: 'GET',
//            dataType: 'json',
//            content: 'application/json',
//            success: function (data) {
//
//                console.log(data);
//            }
//        })
//    }

//-------complint view modal-----
                                                        $('#com_view').on("click", function () {
                                                            var complaint_ref = $('#complaint_ref').val();
                                                            //var identity_card_no = $('#compliner_id').val();
                                                            console.log('test');
                                                            //alert();
                                                            $.ajax({
                                                                url: "<?php echo base_url('index.php/Make_a_complaints_as_you/get_complain_details') ?>",
                                                                type: 'POST',
                                                                data: {complaint_ref: complaint_ref},
                                                                cache: false,
                                                                success: function (data) {
                                                                    var obj = JSON.parse(data);
                                                                    console.log(data);
                                                                    $('#compaliner_name').val(obj.cn_Name_with_initials);
                                                                    $('#reference_no').val(obj.c_gn_complaint_reference_number);
                                                                    $('#complaint_bref').val(obj.c_gn_complaint_inbrief);
                                                                    $('#current_compalin_type').val(obj.sc_description);
                                                                    $('#complaint_type').val(obj.complaint_category);
                                                                }
                                                            });
                                                        });

</script>
<style>

    .required
    {
        color: red;
    }
</style>
