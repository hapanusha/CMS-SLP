<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<!-- Main content -->
<div class="content">
    <div class="container">




        <!-- ./row -->
        <div class="row">
            <!--  original tab main wrapper          <div class="col-12 col-sm-6 col-lg-4">-->
            <div class="col-12 ">
                <div class="card card-primary card-tabs">
                    <!--                    <h2>Complaint as an Anonymous Person</h2>-->
                    <!--                    <div class="card-header p-0 pt-1">
                    
                                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Make the Complaint</a>
                                                </li>
                    
                                          
                                            </ul>
                                        </div>-->
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">

                                <div class="card card-info">

                                    <!-- 1st tab form start -->
                                    <!--                                    <form class="form-horizontal">-->
                                    <div class="card-body">


                                        <form class="form-horizontal" role="form"  method="post"  id="com_anonyms_form" autocomplete="off" novalidate>


                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Select the District which the complaint/information is about</label>
                                                    <?php
                                                    $district_drop = array('0' => 'Select the District');
                                                    $selected_distrc = 1;

                                                    foreach ($result_array_district as $district) {

                                                        $district_drop[$district['district_code']] = $district['district'];
                                                    }

                                                    $cat_extra_attrs = 'id="distric" class="form-control" data-validation="required" data-validation-error-msg-required="Field can not be empty"';
                                                    echo form_dropdown('distric', $district_drop, $selected_distrc, $cat_extra_attrs);
                                                    ?> 

                                                </div>
                                            </div>



                                            <!--    <div class="col-sm-6">
                                                                                             select 
                                                                                            <div class="form-group">
                                                                                                <label>Select the District which the complaint/information is about  </label>
                                            
                                                                                                <select class="form-control" id="distric">
                                                                                                    
                                                                                                    <option value="0">-Select your District-</option>
                                                                                                    <option value="AMP">Ampara</option>
                                                                                                    <option value="ANU">Anuradhapura</option>
                                                                                                    <option value="BDU">Badulla</option>
                                                                                                    <option value="BAT">Batticaloa</option>
                                                                                                    <option value="CMB">Colombo</option>
                                                                                                    <option value="GLE">Galle</option>
                                                                                                    <option value="GMP">Gampaha</option>
                                                                                                    <option value="HMB">Hambantota</option>
                                                                                                    <option value="JFA">Jaffna</option>
                                                                                                    <option value="KTR">Kalutara</option>
                                                                                                    <option value="KND">Kandy</option>
                                                                                                    <option value="KGL">Kegalle</option>
                                                                                                    <option value="KIL">Kilinochchi</option>
                                                                                                    <option value="KUG">Kurunegala</option>
                                                                                                    <option value="MAN">Mannar</option>
                                                                                                    <option value="MTL">Matale</option>
                                                                                                    <option value="MTR">Matara</option>
                                                                                                    <option value="MON">Moneragala</option>
                                                                                                    <option value="MUL">Mullaitivu</option>
                                                                                                    <option value="NUE">Nuwara Eliya</option>
                                                                                                    <option value="POL">Polonnaruwa</option>
                                                                                                    <option value="PUT">Puttalam</option>
                                                                                                    <option value="RTP">Ratnapura</option>
                                                                                                    <option value="TRI">Trincomalee</option>
                                                                                                    <option value="VUA">Vavuniya</option>
                                                                                                </select>
                                            
                                            
                                            
                                                                                            </div>
                                                                                        </div>-->

                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Nearest Police station</label>
                                                    <?php
                                                    $policeStation_drop = array('0' => 'Select the Police Station');
                                                    $selected_npc = 0;

                                                    //print_r($result_array_ps);

                                                    foreach ($result_array_ps as $ps) {

                                                        $policeStation_drop[$ps['ps_police_station_id']] = $ps['ps_name'];
                                                    }

                                                    $cat_extra_attrs = 'id="p_station" class="form-control" data-validation="required" data-validation-error-msg-required="Field can not be empty"';
                                                    echo form_dropdown('p_station', $policeStation_drop, $selected_npc, $cat_extra_attrs);
                                                    ?> 

                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>The Police station to which you want to make the complaint</label><span class="required">*</span>

                                                    <select class="form-control" id="toWhichStation" name="toWhichStation" >
                                                        <option value="0">Select the station to which you want to make the complaint</option>
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



                                            <div class="col-md-6">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>location related to the complaint</label>
                                                    <textarea class="form-control" id="location" rows="4" placeholder="Enter exact address or give enough details to trace the place"></textarea>
                                                </div>
                                            </div>


                                            <!--                                            <div class="col-sm-6">
                                                                                             select 
                                                                                            <div class="form-group" id="type">
                                                                                                <label>Complain Type</label>
                                                                                                <select id="category" name="category" class="form-control">
                                                                                                    <option value="0">-Select Complaint Category-</option>
                                                                                                    <option value="1">Abuse of Women or Children</option>
                                                                                                    <option value="2">Appreciation</option>
                                                                                                    <option value="3">Archeological Issue</option>
                                                                                                    <option value="4">Assault</option>
                                                                                                    <option value="5">Bribery and Corruption</option>
                                                                                                    <option value="5">Complaint against Police</option>
                                                                                                    <option value="6">Criminal Offence</option>
                                                                                                    <option value="7">Cybercrime</option>
                                                                                                    <option value="8">Demonstration / Protest / Strike</option>
                                                                                                    <option value="9">Environmental Issue</option>
                                                                                                    <option value="10">Exchange Fault</option>
                                                                                                    <option value="11">Foreign Employment Issue</option>
                                                                                                    <option value="12">Frauds / Cheating</option>
                                                                                                    <option value="13">House Breaking</option>
                                                                                                    <option value="14">Illegal Mining</option>
                                                                                                    <option value="15">Industrial / Labour Dispute</option>
                                                                                                    <option value="16">Information</option>
                                                                                                    <option value="17">Intellectual Property Dispute</option>
                                                                                                    <option value="18">Miscellaneous</option>
                                                                                                    <option value="19">Mischief / Sabotage</option>
                                                                                                    <option value="20">Murder</option>
                                                                                                    <option value="21">Narcotics / Dangerous Drugs </option>
                                                                                                    <option value="22">National Security</option>
                                                                                                    <option value="23">Natural Disaster</option>
                                                                                                    <option value="24">Offence / Act against Public Health</option>
                                                                                                    <option value="25">Offence against Public Property</option>
                                                                                                    <option value="26">Organized Crime</option>
                                                                                                    <option value="27">Personal Complaint</option>
                                                                                                    <option value="28">Police Clearance </option>
                                                                                                    <option value="29">Property Disputes</option>
                                                                                                    <option value="30">Robbery</option>
                                                                                                    <option value="31">Sexual Offences</option>
                                                                                                    <option value="32">Terrorism Related</option>
                                                                                                    <option value="33">Theft</option>
                                                                                                    <option value="34">Threat &amp; Intimidation</option>
                                                                                                    <option value="35">Tourist Harassment</option>
                                                                                                    <option value="36">Traffic &amp; Road Safety</option>
                                                                                                    <option value="37">Treasure Hunting</option>
                                                                                                    <option value="38">Vice Related</option>
                                                                                                    <option value="39">Violation of Immigration Laws</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>-->

                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Complaint Type</label>

                                                    <?php
                                                    // print_r($result_array);

                                                    $categorydrop = array('0' => 'Select the category');
                                                    $selected_category = 0;

                                                    foreach ($result_array_cat as $category) {

                                                        $categorydrop[$category['id']] = $category['complaint_category'];
                                                    }

                                                    $cat_extra_attrs = 'id="type" class="form-control" data-validation="required" data-validation-error-msg-required="Field can not be empty"';
                                                    echo form_dropdown('category', $categorydrop, $selected_category, $cat_extra_attrs);
                                                    ?>


                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>Your complain in brief</label>
                                                    <textarea class="form-control" id="com_brief" rows="8" placeholder="Write your complain in brief"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Attachment <label form-check-label></label></label>
                                                    <p>(You can attach any file for evidence or explanation, If any.)</p>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" id="attachment" class="custom-file-input" >
                                                            <label class="custom-file-label" for="attachment">Choose the file</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" ><B>Upload</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>




                                            <div class="col-md-6">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>Mention the reason for being here as Anonymous person &nbsp <font color="red">(Optional)</font></label>
                                                    <textarea class="form-control" id="rsn_for_being_anonymous" rows="4" placeholder="Mention the reason for being here as Anonymous person, if you like to tell us"></textarea>
                                                </div>
                                            </div>




                                            <br>
                                            <div class="col-sm-2">

                                                <button  id="submt" type="submit" class="btn btn-info">Submit</button>
                                                <button onclick="event.preventDefault();$('#com_anonyms_form').trigger('reset');$('#com_anonyms_form').val('');" class="btn btn-default">Reset</button>

                                                <!--                                             
                                                
                                                                                            </div>
                                                
                                                
                                                
                                                                                        
                                                <!-- /.card-body -->

                                                <!-- /.card-footer -->
                                                <!--                                    </form>-->
                                            </div> <!-- hidden field: user type's to the  complaint general table --> 

                                            <input type="hidden" id='asYouUserType' class="form-control" value="Via online App">
                                            
                                        </form>
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
        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery/jquery.min.js"></script>

        <script>
                                                    $(document).ready(function () {
                                                        initialdataload();
                                                    })

                                                    $('#submt').on("click", function () {

                                                        var distric = $('#distric').val();
                                                        var p_station = $('#p_station').val();
                                                        var toWhichStation = $('#toWhichStation').val();
                                                        
                                                        var location = $('#location').val();
                                                        var type = $('#type').val();
                                                        var com_brief = $('#com_brief').val();
                                                        var attachment = $('#attachment').val();
                                                        var rsn_for_being_anonymous = $('#rsn_for_being_anonymous').val();
                                                        var asYouUserType = $('#asYouUserType').val(); 

                                                        $.ajax({
                                                            url: '<?php echo base_url() ?>index.php/Make_a_complaints_anonymous/save_anony_detail',
                                                            type: 'POST',
                                                            data: {
                                                                'distric': distric,
                                                                'p_station': p_station,
                                                                'toWhichStation': toWhichStation,
                                                                'location': location,
                                                                'type': type,
                                                                'com_brief': com_brief,
                                                                'attachment': attachment,
                                                                'rsn_for_being_anonymous': rsn_for_being_anonymous,
                                                                'asYouUserType': asYouUserType

                                                            },
                                                            success: function (response) {

//                                                                if (response != 0) {
//                                                                    alert('success');
//                                                                } else {
//                                                                    alert('fail');
//                                                                }



                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-middle',
                    showConfirmButton: false,
                    width:250,
                    timer: 200
                });


                Toast.fire({
                    type: 'success',
                    title: 'Complaint Status Updated.',
                    timer: 2000,

                });



         

                                                            },
                                                            error: function (xhr, status, error) {

                                                            }
                                                        })

                                                    })

                                                    function initialdataload() {
                                                        $.ajax({
                                                            url: '<?php echo base_url() ?>index.php/Make_a_complaints_anonymous/load_data',
                                                            type: 'GET',
                                                            dataType: 'json',
                                                            content: 'application/json',
                                                            success: function (data) {

                                                                console.log(data);
                                                            }
                                                        })
                                                    }

        </script>
















