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
                    <h2>Manage User Groups </h2>
                    <div class="card card-info">
                        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('user/save_usergroup') ?>" id="ugroupform" autocomplete="off" novalidate>
                            <div class="panel-body">  
                                <div class="row">
                                    <div class="col-md-5">  
                                        <br>
                                        
                                        <div class="form-group">
                                            <label for="grp_name" class="col-md-3 control-label">Name</label>
                                            <div class="col-md-9">
                                                <input type="hidden" name="grp_id" id="grp_id">
                                                <input type="text" data-validation="required" data-validation-error-msg-required="Field can not be empty" class="form-control" id="grp_name" name="grp_name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="acc_level" class="col-md-3 control-label">Access Level</label>
                                            <div class="col-md-9">
                                                <select type="text" class="form-control" onchange="changegrpview(this.value)" data-validation="required" data-validation-error-msg-required="Field can not be empty" id="acc_level" name="acc_level">
                                                    <option value=''></option>
                                                    <?php
                                                    echo $predata['ops'];
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="comp" class="col-md-3 control-label">Company</label>
                                            <div class="col-md-9">
                                                <select type="text" class="form-control" data-validation="required" onchange="load_branches(this.value, '')" data-validation-error-msg-required="Field can not be empty" id="comp" name="comp" disabled>
                                                    <option value=''></option>
                                                    <?php
                                                    foreach ($company as $grp) {
                                                        if ($predata['comp'] == 'all') {
                                                            echo "<option value='" . $grp['grp_id'] . "'>" . $grp['grp_name'] . "</option>";
                                                        } else {
                                                            if ($predata['comp'] == $grp['grp_id']) {
                                                                echo "<option value='" . $grp['grp_id'] . "'>" . $grp['grp_name'] . "</option>";
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
										
                                    </div>
                                    <div class="col-md-7">
                                        <table id="ugrouptable" class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>User Group</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
//foreach ($groups as $grp) {
//    echo "<tr>";
//    echo "<td>" . $grp['ug_name'] . "</td>";
//
//    if ($predata['comp'] == 'all') {
//        echo "<td><a class='btn btn-info btn-xs' onclick='event.preventDefault();edit_group(" . $grp['ug_id'] . ",\"" . $grp['ug_name'] . "\"," . $grp['ug_level'] . "," . ((empty($grp['ug_company'])) ? "null" : $grp['ug_company']) . "," . ((empty($grp['ug_branch'])) ? "null" : $grp['ug_branch']) . ")'>Edit</a></td>";
//    } else {
//        if (($predata['comp'] == $grp['ug_company']) && ($grp['ug_level'] == 3)) {
//            echo "<td><a class='btn btn-info btn-xs' onclick='event.preventDefault();edit_group(" . $grp['ug_id'] . ",\"" . $grp['ug_name'] . "\"," . $grp['ug_level'] . "," . ((empty($grp['ug_company'])) ? "null" : $grp['ug_company']) . "," . ((empty($grp['ug_branch'])) ? "null" : $grp['ug_branch']) . ")'>Edit</a></td>";
//        } else if ($grp['ug_level'] > 3) {
//            echo "<td><a class='btn btn-info btn-xs' onclick='event.preventDefault();edit_group(" . $grp['ug_id'] . ",\"" . $grp['ug_name'] . "\"," . $grp['ug_level'] . "," . ((empty($grp['ug_company'])) ? "null" : $grp['ug_company']) . "," . ((empty($grp['ug_branch'])) ? "null" : $grp['ug_branch']) . ")'>Edit</a></td>";
//        } else {
//            echo "<td></td>";
//        }
//    }
//
//    echo "</tr>";
//}
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-info">Save</button> 
                                <button type="submit" class="btn btn-default">Reset</button>
                            </div>
                        </form>                    



                        <!-- 1st tab form start -->
                        <form class="form-horizontal" enctype='multipart/form-data' method='post' accept-charset='utf-8' id="add_police_officer" action="Add_users/save_adduser" ><!-- file upload changes   ---->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label >Name </label> <span class="required" id="chk_off">*</span>
                                            <div class="col-sm-9">
                                                <input type="text" id='off_number' name='off_number' class="form-control" placeholder="Enter Officer Number" maxlength="6">    
                                            </div>
                                        </div>                               
                                        <div class="form-group">
                                            <label for="acc_level" class="col-md-3 control-label">Access Level</label>
                                            <div class="col-md-9">
                                                <select type="text" class="form-control" onchange="changegrpview(this.value)" data-validation="required" data-validation-error-msg-required="Field can not be empty" id="acc_level" name="acc_level">
                                                    <option value=''></option>
                                                    <?php
                                                    echo $predata['ops'];
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <table id="ugrouptable" class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>User Group</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
//                                                foreach ($groups as $grp) {
//                                                    echo "<tr>";
//                                                    echo "<td>" . $grp['ug_name'] . "</td>";
//
//                                                    if ($predata['comp'] == 'all') {
//                                                        echo "<td><a class='btn btn-info btn-xs' onclick='event.preventDefault();edit_group(" . $grp['ug_id'] . ",\"" . $grp['ug_name'] . "\"," . $grp['ug_level'] . "," . ((empty($grp['ug_company'])) ? "null" : $grp['ug_company']) . "," . ((empty($grp['ug_branch'])) ? "null" : $grp['ug_branch']) . ")'>Edit</a></td>";
//                                                    } else {
//                                                        if (($predata['comp'] == $grp['ug_company']) && ($grp['ug_level'] == 3)) {
//                                                            echo "<td><a class='btn btn-info btn-xs' onclick='event.preventDefault();edit_group(" . $grp['ug_id'] . ",\"" . $grp['ug_name'] . "\"," . $grp['ug_level'] . "," . ((empty($grp['ug_company'])) ? "null" : $grp['ug_company']) . "," . ((empty($grp['ug_branch'])) ? "null" : $grp['ug_branch']) . ")'>Edit</a></td>";
//                                                        } else if ($grp['ug_level'] > 3) {
//                                                            echo "<td><a class='btn btn-info btn-xs' onclick='event.preventDefault();edit_group(" . $grp['ug_id'] . ",\"" . $grp['ug_name'] . "\"," . $grp['ug_level'] . "," . ((empty($grp['ug_company'])) ? "null" : $grp['ug_company']) . "," . ((empty($grp['ug_branch'])) ? "null" : $grp['ug_branch']) . ")'>Edit</a></td>";
//                                                        } else {
//                                                            echo "<td></td>";
//                                                        }
//                                                    }
//
//                                                    echo "</tr>";
//                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" id='submt' class="btn btn-info">Add</button>
                                        <button type="submit" id='cancel' class="btn btn-default float-right">Cancel</button>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <!-- /.card-footer -->
                            </div>
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

                                                    $(function () {

                                                        $("#off_number").blur(function () {

                                                            $.ajax({
                                                                type: "POST",
                                                                url: "<?php echo base_url() ?>index.php/Add_users/post_officer_number",
                                                                data: {
                                                                    off_number: $("#off_number").val()
                                                                },
                                                                success: function (data) {
                                                                    console.log(data);
                                                                    if (data == 1) {
                                                                        $("<span>Duplicate Officer No</span>").appendTo("#chk_off");
                                                                    } else
                                                                    {
                                                                        $('#chk_off').html("");
                                                                        //$( "<span>*</span>" ).appendTo( "#chk_off" );
                                                                    }


                                                                }
                                                            });
                                                        });

                                                    });
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

                                                            e.preventDefault();
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










