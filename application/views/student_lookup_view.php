<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery-confirm.css'); ?>"> 
<script type="text/javascript" src="<?php echo base_url('js/jquery-confirm.js') ?>"></script><!--jquery-->
<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><i class="fa fa-users"></i>Student</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
            <li><i class="fa fa-cog"></i>Settings</li>
            <li><i class="fa fa-users"></i>Student</li>
        </ol>
    </div>
</div>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="lookup_tab">
        <div class="panel">
            <div class="panel-heading">
                Student Lookup
            </div>
            <hr>
            <form class="form-horizontal" role="form" method="post" id="search_form" autocomplete="off">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <div class="form-group col-md-4">
                            <div class="form-group">
                                <label for="center" class="col-md-3 control-label">Center : </label>
                                <div class="col-md-9">
                                    <?php 
                                        global $branchdrop;
                                        global $selectedbr;
                                        $extraattrs = 'id="l_center" class="form-control" data-validation="required" data-validation-error-msg-required="Field can not be empty"';
                                        echo form_dropdown('l_center',$branchdrop,$selectedbr, $extraattrs); 
                                    ?>
                                </div>
                            </div>				
                        </div>
                        <div class="form-group col-md-4">							
                            <div class="form-group">
                                <label for="l_faculty" class="col-md-3 control-label">Faculty:</label>
                                <div class="col-md-9">
                                    <?php 
                                        global $facultydrop;
                                        global $selectedfac;
                                        $facextraattrs = 'id="l_faculty" class="form-control" data-validation="required" data-validation-error-msg-required="Field can not be empty" onchange="get_degrees(this.value, 1, null, 1)"';
                                        echo form_dropdown('l_faculty',$facultydrop,$selectedfac, $facextraattrs); 
                                    ?>
                                </div>
                            </div>			
                        </div>
                        <div class="form-group col-md-4">							
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Degree Code:</label>
                                <div class="col-md-9">
                                    <select type="text" class="form-control" id="l_Dcode" name="l_Dcode" onchange="get_degree_name(this.value, 1, null, null, 1)" required placeholder="field cannot be empty" data-validation="required" data-validation-error-msg-required="Field can not be empty" value="">
                                        <option value="0">---Select Degree Code---</option>
                                    </select>											
                                </div>				         
                            </div>				
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <div class="form-group col-md-4">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Year:</label>
                                <div class="col-md-9">
                                    <select type="text" class="form-control" id="l_no_year" name="l_no_year" onchange="load_semesters(this.value, null, 1)" required placeholder="field cannot be empty" data-validation="required" data-validation-error-msg-required="Field can not be empty" value="">
                                        <option value="0">---Select Year---</option>
                                    </select>											
                                </div>				         
                            </div>				
                        </div>
                        <div class="form-group col-md-4">							
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Semester:</label>
                                <div class="col-md-9">
                                    <select type="text" class="form-control" id="l_no_semester" name="l_no_semester" required placeholder="field cannot be empty" data-validation="required" data-validation-error-msg-required="Field can not be empty" value="">
                                        <option value="0">---Select Semester---</option>	
                                    </select>											
                                </div>				         
                            </div>				
                        </div>
                        <div class="form-group col-md-4">							
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Batch Code:</label>
                                <div class="col-md-9">
                                    <select type="text" class="form-control" id="l_Bcode" name="l_Bcode" required placeholder="field cannot be empty" data-validation="required" data-validation-error-msg-required="Field can not be empty" value="">
                                        <option value="0">---Select Batch Code---</option>			
                                    </select>											
                                </div>				         
                            </div>				
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary btn-md" name="search" onclick="search_details();">Search</button>
                    </div>
                </div>
            </form>


            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="staff_look" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Register Number</th>
                                    <th>Student Name</th>
                                    <th>NIC No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbl_body">
                                <?php
                                $i = 1;
                                if (!empty($result_array)) {
                                    foreach ($result_array as $va) {
                                        ?>

                                        <tr>
                                            <td align="center"> <?php echo $i ?></td>
                                            <td> <?php echo $va['reg_no'] ?></td>
                                            <td> <?php echo $va['first_name'] . " " . $va['last_name'] ?></td>
                                            <td> <?php echo $va['nic_no'] ?></td>
                                            <td align="center">

                                                <a class="btn btn-default btn-xs" onclick="event.preventDefault();stueditview('<?php echo $va['stu_id'] ?>')"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></a> | 
                                                <a class="btn btn-info btn-xs" onclick="event.preventDefault();load_stueditview('<?php echo $va['stu_id'];?>')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> | 


                                                <?php if ($va["deleted"] == "0") { ?>
                                                    <button onclick="event.preventDefault();update_stu_status('<?php print_r($va["stu_id"]) ?>', '1')" class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-ban-circle' aria-hidden='true'></span></button>
                                                <?php } else { ?>
                                                    <button onclick="event.preventDefault();update_stu_status('<?php print_r($va["stu_id"]) ?>', '0')" class='btn btn-success btn-xs'><span class='glyphicon glyphicon-ok-circle' aria-hidden='true'></span></button>
                                                    <?php } ?>

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
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $.validate({
            form: '#stu_reg'
        });


        $(document).ready(function () {
            $('#staff_look').DataTable({
                'ordering': true,
                'lengthMenu': [10, 25, 50, 75, 100]
            });
        });


        function update_stu_status(student_id, new_status)
        {
            var batch_id = $('#l_Bcode').val();
            $.ajax(
                    {
                        url: "<?php echo base_url('student/change_student_status') ?>",
                        type: 'POST',
                        async: true,
                        cache: false,
                        dataType: 'json',
                        data: {'student_id': student_id, 'new_status': new_status},
                        success: function (data)
                        {
                            if (data == 'denied')
                            {
                                funcres = {status: "denied", message: "You have no right to proceed the action"};
                                result_notification(funcres);
                            } else
                            {
                                if (batch_id == '' || batch_id == 0 || batch_id == null) {
                                    location.reload();
                                } else {
                                    search_details();
                                }

                                result_notification(data);
                            }
                        }
                    });

        }

        function load_stueditview(stu)
        {
            $.post("<?php echo base_url('student/set_studentdatasession')?>",{'id':stu},
            function(data)
            {
               if(data)
               {
                    load_edit_page('edit');
               } 
            },  
            "json"
            );
        }


        function load_edit_page(type)
        {
            window.location = '<?php echo base_url("student/load_stueditview")?>?type='+type;
        }

        function stueditview(stu)
        {

            window.location = '<?php echo base_url("student/stuprof_view") ?>?id=' + stu;
        }

        function get_degrees(faculty_id, flag, degree_id, lookup_flag) {
            $('#load_Dcode').find('option').remove().end().append('<option value="">---Select Degree Code---</option>').val('');
            $('#l_Dcode').find('option').remove().end().append('<option value="">---Select Degree Code---</option>').val('');
            if (flag === 1) {
                $.post("<?php echo base_url('Year/load_degree_programs') ?>", {'faculty_id': faculty_id},
                        function (data)
                        {
                            if(data == 'denied')
                            {
                                funcres = {status:"denied", message:"You have no right to proceed the action"};
                                result_notification(funcres);
                            }
                            else
                            {
                                for (var i = 0; i < data.length; i++) {
                                    if (degree_id == data[i]['degree_id']) {
                                        if (lookup_flag) {
                                            $('#l_Dcode').append($("<option></option>").attr("value", data[i]['degree_id']).attr('selected', true).text(data[i]['degree_code']));
                                        }
                                        $('#load_Dcode').append($("<option></option>").attr("value", data[i]['degree_id']).attr('selected', true).text(data[i]['degree_code']));
                                        $('#load_Dname').append($("<option></option>").attr("value", data[i]['degree_id']).attr('selected', true).text(data[i]['degree_name']));
                                    } else {
                                        if (lookup_flag) {
                                            $('#l_Dcode').append($("<option></option>").attr("value", data[i]['degree_id']).text(data[i]['degree_code']));
                                        }
                                        $('#load_Dcode').append($("<option></option>").attr("value", data[i]['degree_id']).text(data[i]['degree_code']));
                                        $('#load_Dname').append($("<option></option>").attr("value", data[i]['degree_id']).text(data[i]['degree_name']));
                                    }

                                }
                            }
                        },
                        "json"
                        );
            }
        }

        function get_degree_name(id, flag, year_no, batch_id, lookup_flag)
        {
            $('#load_Dname').val(id);
            $('#no_year').find('option').remove().end().append('<option value="">---Select Degree Year---</option>').val('');
            $('#Bcode').find('option').remove().end().append('<option value="">---Select Batch Code---</option>').val('');
            $.post("<?php echo base_url('degree/get_degree') ?>", {'id': id},
                    function (data)
                    {
                        if(data == 'denied')
                        {
                            funcres = {status:"denied", message:"You have no right to proceed the action"};
                            result_notification(funcres);
                        }
                        else
                        {
                            if (data != null) {
                                for (var i = 1; i <= data['no_of_year']; i++) {
                                    if (flag) {
                                        if (i == year_no) {
                                            if (lookup_flag) {
                                                $('#l_no_year').append($("<option></option>").attr("value", i).attr('selected', 'selected').text(i));
                                            }
                                            $('#no_year').append($("<option></option>").attr("value", i).attr('selected', 'selected').text(i));
                                        } else {
                                            if (lookup_flag) {
                                                $('#l_no_year').append($("<option></option>").attr("value", i).text(i));
                                            }
                                            $('#no_year').append($("<option></option>").attr("value", i).text(i));
                                        }
                                    } else {
                                        if (lookup_flag) {
                                            $('#l_no_year').append($("<option></option>").text(i));
                                        }
                                        $('#no_year').append($("<option></option>").attr("value", i).text(i));
                                    }
                                }
                            }

                            $.post("<?php echo base_url('batch/load_batches') ?>", {'degree_id': id},
                                    function (data)
                                    {

                                        for (j = 0; j < data.length; j++) {
                                            if (data[j]['id'] == batch_id) {
                                                if (lookup_flag) {
                                                    $('#l_Bcode').append($("<option></option>").attr('selected', true).attr("value", data[j]['id']).text(data[j]['batch_code']));
                                                }
                                                $('#Bcode').append($("<option></option>").attr('selected', true).attr("value", data[j]['id']).text(data[j]['batch_code']));
                                            } else {
                                                if (lookup_flag) {
                                                    $('#l_Bcode').append($("<option></option>").attr("value", data[j]['id']).text(data[j]['batch_code']));
                                                }
                                                $('#Bcode').append($("<option></option>").attr("value", data[j]['id']).text(data[j]['batch_code']));
                                            }
                                        }

                                    },
                                    "json"
                                    );
                        }
                    },
                    "json"
                    );
        }

        function load_semesters(year_no, semester_no, lookup_flag) {
            $('#no_semester').find('option').remove().end().append('<option value="">---Select Semester---</option>').val('');
            if (lookup_flag) {
                var degree_id = $('#l_Dcode').val();
            } else {
                var degree_id = $('#load_Dcode').val();
            }
            if (degree_id == '' || degree_id == null) {
                var degree_id = $('#degree').val();
            }
            $.post("<?php echo base_url('course/load_semesters') ?>", {'degree_id': degree_id, 'year_no': year_no},
                    function (data)
                    {
                        if(data == 'denied')
                        {
                            funcres = {status:"denied", message:"You have no right to proceed the action"};
                            result_notification(funcres);
                        }
                        else
                        {
                            for (var i = 1; i <= data; i++) {
                                if (semester_no == i) {
                                    if (lookup_flag) {
                                        $('#l_no_semester').append($("<option></option>").attr('selected', 'selected').attr("value", i).text(i));
                                    }
                                    $('#no_semester').append($("<option></option>").attr('selected', 'selected').attr("value", i).text(i));
                                } else {
                                    if (lookup_flag) {
                                        $('#l_no_semester').append($("<option></option>").attr("value", i).text(i));
                                    }
                                    $('#no_semester').append($("<option></option>").attr("value", i).text(i));
                                }
                            }
                        }
                    },
                    "json"
                    );
        }

        function search_details() {
            var res = [];
            var center_id = $('#l_center').val();
            var faculty_id = $('#l_faculty').val();
            var degree_id = $('#l_Dcode').val();
            var year_no = $('#l_no_year').val();
            var semester_no = $('#l_no_semester').val();
            var batch_id = $('#l_Bcode').val();
            if (batch_id == null || batch_id == '' || batch_id == 0) {
                res['status'] = 'denied';
                res['message'] = 'Please Select Relevent Batch Code';
                result_notification(res);
            } else {
                $.post("<?php echo base_url('student/filter_students_batch_lookup') ?>", {'degree_id': degree_id, 'year_no': year_no, 'semester_no': semester_no, 'batch_id': batch_id},
                        function (data)
                        {
                            if(data == 'denied')
                            {
                                funcres = {status:"denied", message:"You have no right to proceed the action"};
                                result_notification(funcres);
                            }
                            else
                            {
                                if (data.length > 0) {
    //                                $('#tbl_body').find('tr').remove();
                                    $('#staff_look').DataTable().clear();
                                    for (j = 0; j < data.length; j++) {
                                        if (data[j]['stu_deleted'] == 1) {
                                            content = "<button type='button' title='Activate' class='btn btn-success btn-xs'><span class='glyphicon glyphicon-ok-circle' aria-hidden='true' onclick='update_stu_status(" + data[j]['stu_id'] + ",0);'></span></button>";
                                        } else {
                                            content = "<button type='button' title='Deactivate' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-ban-circle' aria-hidden='true' onclick='update_stu_status(" + data[j]['stu_id'] + ",1);'></span></button>";
                                        }
    ////                                    content2 = " |<a class='btn btn-info btn-xs' onclick='event.preventDefault();stueditview(" + data[j]['stu_id'] + ")'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>|";
    //                                    $('#tbl_body').append("<tr><td>" + (j + 1) + "</td><td>" + data[j]['reg_no'] + "</td><td>" + data[j]['first_name'] + " " + data[j]['last_name'] + "</td><td>" + data[j]['nic_no'] + "</td><td align='center'><button type='button' title='Show Courses' class='btn btn-default btn-xs'><span class='glyphicon glyphicon-folder-open' aria-hidden='true' onclick='event.preventDefault();load_stueditview(" + data[j]['stu_co_id'] + ");'></span></button>"  + content + "</td></tr>");
                                        number_content = "<td align='center'>" + (j + 1) + "</td>";
                                        action_content = "<td align='center'><button type='button' title='Show Courses' class='btn btn-default btn-xs'><span class='glyphicon glyphicon-folder-open' aria-hidden='true' onclick='event.preventDefault();load_stueditview(" + data[j]['stu_co_id'] + ");'></span></button>|" + content + "</td>";
                                        $('#staff_look').DataTable().row.add([
                                            number_content,
                                            data[j]['reg_no'],
                                            data[j]['first_name'] + " " + data[j]['last_name'],
                                            data[j]['nic_no'],
                                            action_content
                                        ]).draw(false);
                                    }


                                }
                            }
                        },
                        "json"
                        );

            }
        }
    </script>

