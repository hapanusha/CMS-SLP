

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                   <!--<h1 class="m-0 text-dark">Report Offence by me - (<?php echo $_SESSION['u_name'] ?> </h1>-->
                    <h1 class="m-0 text-dark">Report Offence by me - SLP </h1>
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
    <!--<section class="content">-->
    <div class="container-fluid">
        <!-- Info boxes -->

        <!-- /.row -->
        <!-- TABLE: LATEST Complaints -->
        <div class="card">
            <div class="card-header border-transparent">
                <!--                    <h3 class="card-title">Latest Complaints</h3>-->

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




            <form class="form-horizontal" role="form" method="post"  id="complaints_form" action="<?php echo base_url('index.php/report/offence_by_me_report_pdf') ?>"  autocomplete="off" novalidate enctype="multipart/form-data">

                <div class="row">
                    <!--<div class="col-md-12">-->

                    

                    <div class="col-sm-6">							
                        <div class="form-group">
                            <label for="l_faculty" class="col-md-3 control-label">Start Date:</label>
                            <div class="col-md-9">
                                <input type="text" id="sdate" name="sdate" data-format="YYYY-MM-DD" class="form-control datepicker" placeholder="" data-validation="required" data-validation-error-msg-required="Field is empty" value="2020-09-01">
                            </div>
                        </div>			
                    </div>


                    <div class="col-sm-6">							
                        <div class="form-group">
                            <label for="l_faculty" class="col-md-3 control-label">End Date:</label>
                            <div class="col-md-9">
                                <input type="text" id="edate" name="edate" data-format="YYYY-MM-DD" class="form-control datepicker" placeholder="" data-validation="required" data-validation-error-msg-required="Field is empty" value="2020-09-30"> 
                            </div>
                        </div>			
                    </div>
                    
                    

<!--                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="center" class="col-md-3 control-label">Police Station :</label>


                            <div class="col-md-9">
                                <select class="form-control" id="ps" name="ps" >
                                    <option value="-1">--All--</option>
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
                    </div>-->


<input type="hidden" id='userLogID' name="userLogID" class="form-control" value="<?=$_SESSION['u_id']?>"> 

                    <!--                            </div>-->
                    <div class="form-group col-md-10">							
                        <div class="form-group">
                            <div class="col-md-9">
                                <button style="float: right; margin-right: 1.5%;" class="btn btn-success" id="print_full" name="print_full" onclick="">Print Report</button>
                            </div>
                        </div>			
                    </div>
                    <!--                        </div>-->
                </div>


            </form>











        </div>



        <!-- /.card-footer -->
    </div>
    <!-- /.card -->


</div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">






    function load_district() {

        var province_id = $('#province_id').val();

        $.post("http://localhost/CMS/index.php/report/load_district", {'id': province_id},
                function (data)
                {
                    console.log(data);
                    if (data == 'denied')
                    {
                        funcres = {status: "denied", message: "You have no right to proceed the action"};
                        result_notification(funcres);
                    } else
                    {
                        $('#district_name').empty();
                        $('#district_name').append($("<option value = -1>-- All --</option>"));
                        for (var i = 0; i < data.length; i++)
                        {
                            $('#district_name').append($("<option></option>").attr("value", data[i]['id']).text(data[i]['district']));
                        }

                    }
                },
                "json"
                );

    }


    function load_poloce_division() {

        var district_id = $('#district_name').val();

        $.post("http://localhost/CMS/index.php/report/load_division", {'id': district_id},
                function (data)
                {
                    console.log(data);
                    if (data == 'denied')
                    {
                        funcres = {status: "denied", message: "You have no right to proceed the action"};
                        result_notification(funcres);
                    } else
                    {
                        $('#police_division').empty();
                        $('#police_division').append($("<option value = -1>-- All --</option>"));
                        for (var i = 0; i < data.length; i++)
                        {
                            $('#police_division').append($("<option></option>").attr("value", data[i]['id']).text(data[i]['div_division_name']));
                        }

                    }
                },
                "json"
                );
    }


</script>





