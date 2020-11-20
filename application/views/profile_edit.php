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
                    <h2>Profile </h2>
                    <div class="card card-info">

                        <!-- 1st tab form start -->
                        <form class="form-horizontal" enctype='multipart/form-data' method='post' accept-charset='utf-8' id="add_police_officer" action="Add_users/save_update_user" ><!-- file upload changes   ---->
                            <!--                        <form class="form-horizontal" id="add_police_officer" novalidate="novalidate" >-->
                            <div class="card-body">

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Officer Number: </label>       
                                         

                                        <input type="text" id='off_number' name='off_number' class="form-control" placeholder="80000" maxlength="6">
                                    </div>
                                </div>
                               

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Name with Initials</label>
                                        
                                       
                                        <input type="text" id='off_nameWithInitial' name='off_nameWithInitial' class="form-control" placeholder="HAP Anusha">
                                    
                                    
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Calling Name</label>
                                        
                                        <input type="text" id='off_callingName' name='off_callingName' class="form-control" placeholder="Anusha">
                                        
                                        
                                    </div>
                                </div>

                                

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label> Rank</label>

                                        <select class="form-control" id="off_rank" name="off_rank">
                                            <option value="0">OIC</option>
                                            <?php
                                            $result = $this->db->get('cms_rank')->result_array();
                                            foreach ($result as $value) {
                                                ?>
                                                <option value="<?php echo $value['id']; ?>"><?php echo $value['rank']; ?></option>
                                            <?php }
                                            ?>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>Select your Province  </label><span class="required">*</span>

                                        <select class="form-control" id="off_province" name="off_province" onchange="load_district()">
                                            <option value="0">Colombo</option>
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

                                    <div class="form-group">
                                        <label>Select your District</label><span class="required">*</span>

                                        <select class="form-control" id="off_district" name="off_district" onchange="load_division()">
                                            <option value="0">Matara</option>

                                        </select>
                                    </div>
                                </div> 




                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Select your Division</label><span class="required">*</span>

                                        <select class="form-control" id="off_division" name="off_division" onchange="load_ps()">
                                            <option value="0">Matara</option>

                                        </select>
                                    </div>
                                </div>



                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Attached Police station</label><span class="required">*</span>

                                        <select class="form-control" id="off_ps" name="off_ps" >
                                            <option value="0">Matara</option>

                                        </select>


                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>NIC</label><span class="required">*</span>
                                        <input type="text" id='off_nic' name="off_nic" class="form-control" placeholder="198476610305" maxlength="12">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Contact Number</label><span class="required">*</span>
                                        <input type="text" id='off_contNo' name="off_contNo" class="form-control" placeholder="0716668761"  maxlength="10"><br>
                                        <input type="text" id='off_contNoOthr' name="off_contNoOthr" class="form-control" placeholder="0773509886" maxlength="10">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Email Address</label><span class="required">*</span>
                                        <input type="email" id='off_email' name="off_email" class="form-control" placeholder="anushahap@gmail.com">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <!-- textarea -->
                                    <div class="form-group" >
                                        <label>Address</label><span class="required">*</span>

                                        <input type="text" id='off_address_no' class="form-control" placeholder="165-A">
                                        <input type="text" id='off_address_street' class="form-control" placeholder="Rangei mahawatta">
                                        <input type="text" id='off_address_town' name="off_address_town" class="form-control" placeholder="Gandara">
                                        <select class="form-control" id="off_address_district" name="off_address_district" > 
                                            <option value="0">Matara</option>
                                            <?php
                                            $result = $this->db->get('cms_district')->result_array();
                                            foreach ($result as $value) {
                                                ?>
                                                <option value="<?php echo $value['id']; ?>"><?php echo $value['district']; ?></option>
                                            <?php }
                                            ?>
                                        </select>

                                    </div>
                                </div>





                                <div class="col-md-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Highest Academic Qualification Achieved</label><span class="required">*</span>
                                        <input type="text" id='off_hgtAcdmcQulfctn' name="off_hgtAcdmcQulfctn" class="form-control" placeholder="B.Sc.">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Other Academic Qualification Achieved. </label>
                                        <p>(Enter qualification from highest to the lowest)</p>
                                        <textarea id='off_othrQulfct' name="off_othrQulfct" class="form-control" rows="8" placeholder="pgd"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <!--                    <div class="form-group">-->
                                    <label>Add a profile picture</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" id='off_prflPic'name="off_prflPic" class="custom-file-input" >
                                            <label class="custom-file-label" for="exampleInputFile">Choose profile picture</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id=""><B>Upload</b></span>
                                        </div>
                                    </div>
                                </div><br>


<!--                                <div class="col-sm-6">
                                     select 
                                    <div class="form-group">
                                        <label>User Group</label><span class="required">*</span>

                                        <select class="form-control" id="off_userGroup" name="off_userGroup" >
                                            <option value="0">Select the user group</option>
                                            <?php
                                            $result = $this->db->get('cms_usergroup')->result_array();
                                            foreach ($result as $value) {
                                                ?>
                                                <option value="<?php echo $value['user_group_id']; ?>"><?php echo $value['user_group_name']; ?></option>
                                            <?php }
                                            ?>
                                        </select>   


                                        user Status (Active/inactive) update. Default value is 1=active

                                        <input type="hidden" id='off_userStatus' class="form-control" value="1">










                                    </div>
                                </div> -->



                                <!--User name and the password will be send automatically to the given email address on Add button click-->  







                                <br> <br>

                                <div class="col-sm-3">

                                    <button type="submit" id='submt' class="btn btn-info">Update Details</button>
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














    </section>



</div>
<!-- /.content-wrapper -->

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




                                                $('#add_police_officer').validate({
                                                    rules: {
                                                        off_number: {
                                                            required: true,
                                                            maxlength: 6
                                                        },

                                                        off_nameWithInitial: {
                                                            required: true

                                                        },

                                                        off_title: {
                                                            required: true,
                                                        },

                                                        off_callingName: {
                                                            required: true,
                                                            minlength: 3
                                                        },

                                                        off_rank: {
                                                            required: true,
                                                            //minlength: 3
                                                        },

                                                        off_province: {
                                                            required: true,
                                                        },

                                                        off_district: {
                                                            required: true,
                                                        },

                                                        off_division: {
                                                            required: true,
                                                        },

                                                        off_ps: {
                                                            required: true,
                                                        },

                                                        off_nic: {
                                                            required: true,
                                                            minlength: 10
                                                        },

                                                        off_contNo: {
                                                            required: true,
                                                            maxlength: 10
                                                        },

                                                        off_contNoOthr: {
                                                            // required: true,
                                                            maxlength: 10


                                                        },
                                                        off_email: {
                                                            required: true,
                                                            email: true,
                                                        },

                                                        off_contNo: {
                                                            required: true,
                                                            minlength: 10
//                    maxlength: 10
                                                        },

                                                        off_address_town: {
                                                            required: true,
                                                        },

                                                        off_address_district: {
                                                            required: true,
                                                        },

                                                        off_hgtAcdmcQulfctn: {
                                                            required: true,
                                                        },

                                                        off_userGroup: {
                                                            required: true,
                                                        },

                                                    },

                                                    messages: {
                                                        off_number: {
                                                            required: "Please enter a Officer Number",

                                                            minlength: "Your officer number must be at least 4 numbers long "
                                                        },

                                                        off_nameWithInitial: {
                                                            required: "Please provide a officer Name with initials",
                                                            minlength: "Your password must be at least 5 characters long"
                                                        },

                                                        email: {
                                                            required: "Please enter a email address",
                                                            email: "Please enter a vaild email address"
                                                        },

                                                        off_title: {
                                                            required: "Please Select a tille",

                                                        },

                                                        off_callingName: {
                                                            required: "Please provide a calling name for officer",
                                                            minlength: "Your password must be at least 3 characters long"
                                                        },

                                                        off_rank: {
                                                            required: "Please slect a rank",

                                                        },

                                                        off_province: {
                                                            required: "Please slect a province",

                                                        },

                                                        off_district: {
                                                            required: "Please select a district",

                                                        },

                                                        off_division: {
                                                            required: "Please select a division",

                                                        },

                                                        off_ps: {
                                                            required: "Please select a police station",

                                                        },

                                                        off_nic: {
                                                            required: "Please provide a NIC",
                                                            minlength: "Your NIC must be 10 characters long"
                                                                    // maxlength: "Your NIC must be 10 characters long"
                                                        },

                                                        off_contNo: {
                                                            required: "Please provide a Contact Number",
                                                            minlength: "Your Contact Number must be 10 characters long"
                                                        },

                                                        off_contNoOthr: {
                                                            //required: "Please provide a alternative Contact Number",
                                                            minlength: "Your Contact Number must be 10 characters long"
                                                        },

                                                        off_address_town: {
                                                            required: "Please provide a town in your address",
                                                            //minlength: "Your password must be at least 5 characters long"
                                                        },

                                                        off_address_district: {
                                                            required: "Please provide a officer Name with initials",
                                                            //minlength: "Your password must be at least 5 characters long"
                                                        },

                                                        off_hgtAcdmcQulfctn: {
                                                            required: "Please provide a officer Name with initials",
                                                            // minlength: "Your password must be at least 5 characters long"
                                                        },

                                                        off_userGroup: {
                                                            required: "Please provide a officer Name with initials",
                                                            //minlength: "Your password must be at least 5 characters long"
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
                                                });




                                            });


//                                            $('#add_police_officer1').submit(function () {
//
//                                                var off_number = $('#off_number').val();
//
//                                                var off_title = $("input[name='off_title']:checked").val();
//
//                                                var off_nameWithInitial = $('#off_nameWithInitial').val();
//                                                var off_callingName = $('#off_callingName').val();
//                                                var off_rank = $('#off_rank').val();
//
//                                                var off_province = $('#off_province').val();
//                                                var off_district = $('#off_district').val();
//                                                var off_division = $('#off_division').val();
//                                                var off_ps = $('#off_ps').val();
//                                                var off_nic = $('#off_nic').val();
//                                                var off_contNo = $('#off_contNo').val();
//                                                var off_contNoOthr = $('#off_contNoOthr').val();
//                                                var off_email = $('#off_email').val();
//                                                var off_address_no = $('#off_address_no').val();
//                                                var off_address_street = $('#off_address_street').val();
//                                                var off_address_town = $('#off_address_town').val();
//                                                var off_address_district = $('#off_address_district').val();
//                                                var off_hgtAcdmcQulfctn = $('#off_hgtAcdmcQulfctn').val();
//                                                var off_othrQulfct = $('#off_othrQulfct').val();
//                                                var off_prflPic = $('#off_prflPic').val();
//                                                var off_userGroup = $('#off_userGroup').val();
//                                                var off_userStatus = $('#off_userStatus').val();
//
//
//                                                //var off_userName = $('#off_userName').val();
//                                                //var off_password = $('#off_password').val();
//
//                                                //alert(off_rank);
//
//
//                                                $.ajax({
//                                                    url: '<?php echo base_url() ?>index.php/Add_users/save_adduser',
//                                                    type: 'POST',
//                                                    data: {
//                                                        'off_number': off_number,
//                                                        'off_title': off_title,
//                                                        'off_nameWithInitial': off_nameWithInitial,
//                                                        'off_callingName': off_callingName,
//                                                        'off_rank': off_rank,
//                                                        'off_province': off_province,
//                                                        'off_district': off_district,
//                                                        'off_division': off_division,
//                                                        'off_ps': off_ps,
//                                                        'off_nic': off_nic,
//                                                        'off_contNo': off_contNo,
//                                                        'off_contNoOthr': off_contNoOthr,
//                                                        'off_email': off_email,
//                                                        'off_address_no': off_address_no,
//                                                        'off_address_street': off_address_street,
//                                                        'off_address_town': off_address_town,
//                                                        'off_address_district': off_address_district,
//                                                        'off_hgtAcdmcQulfctn': off_hgtAcdmcQulfctn,
//                                                        'off_othrQulfct': off_othrQulfct,
//                                                        'off_prflPic': off_prflPic,
//                                                        'off_userGroup': off_userGroup,
//                                                        'off_userStatus': off_userStatus,
//
//                                                        //'off_userName': off_userName,
//                                                        //'off_password': off_password
//
//
//                                                    },
//                                                    success: function (response) {
//
//                                                        if (response != 0) {
//                                                            alert('failed to update the DB1');
//                                                        } else {
//                                                            alert('Scussfuly updated the DB2');
//                                                        }
//
//                                                    },
//                                                    error: function (xhr, status, error) {
//
//                                                    }
//                                                })
//
//                                            })

                                            function load_district() {

                                                var province = $('#off_province').val();

                                                $.post("http://localhost/CMS/index.php/add_users/load_district", {'id': province},
                                                        function (data)
                                                        {
                                                            console.log(data);
                                                            if (data == 'denied')
                                                            {
                                                                funcres = {status: "denied", message: "You have no right to proceed the action"};
                                                                result_notification(funcres);
                                                            } else
                                                            {
                                                                $('#off_district').empty();
                                                                $('#off_district').append($("<option value = 0>Select the District</option>"));
                                                                for (var i = 0; i < data.length; i++)
                                                                {
                                                                    $('#off_district').append($("<option></option>").attr("value", data[i]['id']).text(data[i]['district']));
                                                                }

                                                            }
                                                        },
                                                        "json"
                                                        );

                                            }

                                            function load_division() {

                                                var district = $('#off_district').val();

                                                $.post("http://localhost/CMS/index.php/add_users/load_division", {'id': district},
                                                        function (data)
                                                        {
                                                            console.log(data);
                                                            if (data == 'denied')
                                                            {
                                                                funcres = {status: "denied", message: "You have no right to proceed the action"};
                                                                result_notification(funcres);
                                                            } else
                                                            {
                                                                $('#off_division').empty();
                                                                $('#off_division').append($("<option value = 0>Select the Division</option>"));
                                                                for (var i = 0; i < data.length; i++)
                                                                {
                                                                    $('#off_division').append($("<option></option>").attr("value", data[i]['div_id']).text(data[i]['div_division_name']));
                                                                }

                                                            }
                                                        },
                                                        "json"
                                                        );

                                            }



                                            function load_ps() {
                                                var district = $('#off_division').val();
                                                //alert(district);
                                                $.post("http://localhost/CMS/index.php/add_users/load_police_station", {'id': district},
                                                        function (data)
                                                        {
                                                            console.log(data);
                                                            if (data == 'denied')
                                                            {
                                                                funcres = {status: "denied", message: "You have no right to proceed the action"};
                                                                result_notification(funcres);
                                                            } else
                                                            {
                                                                $('#off_ps').empty();
                                                                $('#off_ps').append($("<option value = 0>Select the Police Station</option>"));
                                                                for (var i = 0; i < data.length; i++)
                                                                {
                                                                    $('#off_ps').append($("<option></option>").attr("value", data[i]['ps_police_station_id']).text(data[i]['ps_name']));
                                                                }
                                                            }
                                                        },
                                                        "json"
                                                        );

                                            }





                                            function initialdataload() {
                                                $.ajax({
                                                    url: '<?php echo base_url() ?>index.php/Add_Users/load_data',
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










