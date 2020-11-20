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
                    <div class="card card-info col-md-10" align="center">

                        <!-- 1st tab form start -->
                        <form class="form-horizontal" enctype='multipart/form-data' method='post' accept-charset='utf-8' id="add_police_officer" action="Add_users/save_update_user" ><!-- file upload changes   ---->
                            <!--                        <form class="form-horizontal" id="add_police_officer" novalidate="novalidate" >-->
                            <div class="card-body ">
                                <!--                                1st row start-->
                                <div class="row " align="center"><?php
//                                        print_r('<pre>');
//                                        print_r($result);
//                                        print_r('</pre>');
                                        ?>

                                    <div class="col-sm-4">
                                        

                                        <img class="profile-user-img img-fluid" src="<?php echo base_url() ?>uploads/officer_profile/<?= $result[0]['po_profile_picture'] ?>" alt="User profile picture">
                                        <?php //print_r($result);?>

                                    </div>

                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <table align="center">

                                                <tr>
                                                    <td><label class="text-muted">Calling Name</label></td>
                                                    <td><label class="text-primary">:<?= $result[0]['po_calling_name'] ?></label></td>
                                                </tr>
                                                <tr>
                                                    <td><label class="text-muted">Officer Number </label></td>
                                                    <td><label class="text-primary">: <?= $result[0]['po_officer_number'] ?></label></td>
                                                </tr>
                                                <tr>
                                                    <td><label class="text-muted">Name with Initials</label></td>
                                                    <td><label class="text-primary">: <?= $result[0]['po_name_with_initials'] ?></label></td>
                                                </tr>
                                            </table>

                                        </div>

                                    </div>

                                    <div class="col-sm-4" align="right">

                                        <button type="submit" id='submt' class="btn btn-info">Update Details</button><br><br>
<!--                                        <button type="submit" id='cancel' class="btn btn-default " onclick="<?php echo base_url(); ?>index.php / profiles_edit">Cancel</button>-->

                                    </div>


                                </div><br><br>
                                <!--                                1st row end-->

                                <!--                                2nd row start-->
                                <div class="row" align="center">
                                    <div class="col-sm-12">
                                        <table align="center" >

                                            <tr>
                                                <td><label class="text-muted">Rank</label></td>
                                                <td><label class="text-info">: <?= $result[0]['rank'] ?> </label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="text-muted"> Attached Police station</label></td>
                                                <td><label class="text-info">: <?= $result[0]['ps_name'] ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="text-muted">NIC</label></td>
                                                <td><label class="text-info">: <?= $result[0]['po_nic_number'] ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="text-muted">Address</label></td>
                                                <td><label class="text-info">: <?= $result[0]['po_residence_address_no'].', '.$result[0]['po_residence_address_street'].', '.$result[0]['po_residence_address_town'].', '.$result[0]['po_residence_address_district'] ?> </label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="text-muted">Contact Number</label></td>
                                                <td><label class="text-info">: <?= $result[0]['po_contact_number_mobile'] ?></label><br><label class="text-info">: <?= $result[0]['po_contact_number_other'] ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="text-muted">Email</label></td>
                                                <td><label class="text-info">: <?= $result[0]['po_email_address'] ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="text-muted">Highest Academic Qualification Achieved</label></td>
                                                <td><label class="text-info">: <?= $result[0]['po_highest_qualification_achieved'] ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="text-muted">Other Academic Qualification Achieved</label></td>
                                                <td><label class="text-info">: <?= $result[0]['po_other_qualification__achieved'] ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="text-muted">User Group</label></td>
                                                <td><label class="text-info">: <?php // $result[0]['po_user_group_id']; 
                                                        
                                                                     $user_roal = $this->session->userdata('u_group');
                                                                    switch ($user_roal) {
                                                                    case ROLE_ADMIN_USER:
                                                                        $data_role = 'Admin';
                                                                        break;
                                                                    case ROLE_MANAGER_USER:
                                                                        $data_role = 'Manger';
                                                                        break;
                                                                    case ROLE_NORMAL_USER:
                                                                        $data_role = 'Normal User';
                                                                        break;
                                                                    case ROLE_SUPER_USER:
                                                                        $data_role = 'Super Admin';
                                                                        break;
                                                                }
                                                                echo $data_role;
                                                        
                                                        ?></label></td>
                                            </tr>

                                        </table>

                                    </div>

                                </div  >

                                <!--                                2nd row end-->

                            </div>
                    </div>



                    <!--User name and the password will be send automatically to the given email address on Add button click-->  

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
//
//                                                //validations code
//                                                $.validator.setDefaults({
//                                                    submitHandler: function () {
//                                                        alert("Form successfully submitted!");
//                                                    }
//                                                });
//
//
//
//
//                                                $('#add_police_officer').validate({
//                                                    rules: {
//                                                        off_number: {
//                                                            required: true,
//                                                            maxlength: 6
//                                                        },
//
//                                                        off_nameWithInitial: {
//                                                            required: true
//
//                                                        },
//
//                                                        off_title: {
//                                                            required: true,
//                                                        },
//
//                                                        off_callingName: {
//                                                            required: true,
//                                                            minlength: 3
//                                                        },
//
//                                                        off_rank: {
//                                                            required: true,
//                                                            //minlength: 3
//                                                        },
//
//                                                        off_province: {
//                                                            required: true,
//                                                        },
//
//                                                        off_district: {
//                                                            required: true,
//                                                        },
//
//                                                        off_division: {
//                                                            required: true,
//                                                        },
//
//                                                        off_ps: {
//                                                            required: true,
//                                                        },
//
//                                                        off_nic: {
//                                                            required: true,
//                                                            minlength: 10
//                                                        },
//
//                                                        off_contNo: {
//                                                            required: true,
//                                                            maxlength: 10
//                                                        },
//
//                                                        off_contNoOthr: {
//                                                            // required: true,
//                                                            maxlength: 10
//
//
//                                                        },
//                                                        off_email: {
//                                                            required: true,
//                                                            email: true,
//                                                        },
//
//                                                        off_contNo: {
//                                                            required: true,
//                                                            minlength: 10
////                    maxlength: 10
//                                                        },
//
//                                                        off_address_town: {
//                                                            required: true,
//                                                        },
//
//                                                        off_address_district: {
//                                                            required: true,
//                                                        },
//
//                                                        off_hgtAcdmcQulfctn: {
//                                                            required: true,
//                                                        },
//
//                                                        off_userGroup: {
//                                                            required: true,
//                                                        },
//
//                                                    },
//
//                                                    messages: {
//                                                        off_number: {
//                                                            required: "Please enter a Officer Number",
//
//                                                            minlength: "Your officer number must be at least 4 numbers long "
//                                                        },
//
//                                                        off_nameWithInitial: {
//                                                            required: "Please provide a officer Name with initials",
//                                                            minlength: "Your password must be at least 5 characters long"
//                                                        },
//
//                                                        email: {
//                                                            required: "Please enter a email address",
//                                                            email: "Please enter a vaild email address"
//                                                        },
//
//                                                        off_title: {
//                                                            required: "Please Select a tille",
//
//                                                        },
//
//                                                        off_callingName: {
//                                                            required: "Please provide a calling name for officer",
//                                                            minlength: "Your password must be at least 3 characters long"
//                                                        },
//
//                                                        off_rank: {
//                                                            required: "Please slect a rank",
//
//                                                        },
//
//                                                        off_province: {
//                                                            required: "Please slect a province",
//
//                                                        },
//
//                                                        off_district: {
//                                                            required: "Please select a district",
//
//                                                        },
//
//                                                        off_division: {
//                                                            required: "Please select a division",
//
//                                                        },
//
//                                                        off_ps: {
//                                                            required: "Please select a police station",
//
//                                                        },
//
//                                                        off_nic: {
//                                                            required: "Please provide a NIC",
//                                                            minlength: "Your NIC must be 10 characters long"
//                                                                    // maxlength: "Your NIC must be 10 characters long"
//                                                        },
//
//                                                        off_contNo: {
//                                                            required: "Please provide a Contact Number",
//                                                            minlength: "Your Contact Number must be 10 characters long"
//                                                        },
//
//                                                        off_contNoOthr: {
//                                                            //required: "Please provide a alternative Contact Number",
//                                                            minlength: "Your Contact Number must be 10 characters long"
//                                                        },
//
//                                                        off_address_town: {
//                                                            required: "Please provide a town in your address",
//                                                            //minlength: "Your password must be at least 5 characters long"
//                                                        },
//
//                                                        off_address_district: {
//                                                            required: "Please provide a officer Name with initials",
//                                                            //minlength: "Your password must be at least 5 characters long"
//                                                        },
//
//                                                        off_hgtAcdmcQulfctn: {
//                                                            required: "Please provide a officer Name with initials",
//                                                            // minlength: "Your password must be at least 5 characters long"
//                                                        },
//
//                                                        off_userGroup: {
//                                                            required: "Please provide a officer Name with initials",
//                                                            //minlength: "Your password must be at least 5 characters long"
//                                                        },
//
//                                                    },
//                                                    errorElement: 'span',
//                                                    errorPlacement: function (error, element) {
//                                                        error.addClass('invalid-feedback');
//                                                        element.closest('.form-group').append(error);
//                                                    },
//                                                    highlight: function (element, errorClass, validClass) {
//                                                        $(element).addClass('is-invalid');
//                                                    },
//                                                    unhighlight: function (element, errorClass, validClass) {
//                                                        $(element).removeClass('is-invalid');
//                                                    }
//                                                });
//
//
//                                                $("#add_police_officer").submit(function (e) {
//                                                    e.preventDefault();
//                                                    var formData = new FormData($("#add_police_officer")[0]);
//
//                                                    $.ajax({
//                                                        url: $("#add_police_officer").attr('action'),
//                                                        dataType: 'json',
//                                                        type: 'POST',
//                                                        data: formData,
//                                                        contentType: false,
//                                                        processData: false,
//                                                        success: function (resp) {
//                                                            console.log(resp);
//
//                                                        }
//                                                    });
//                                                });
//
//
//
//
//                                            });




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










