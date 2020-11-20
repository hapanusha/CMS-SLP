<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard - CMS <?php //echo $_SESSION['u_name']           ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="far fa-envelope"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"> </span>
                            <button type="button" title="Today's Complaint" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#complaint_status_Modal" data-rowid="<?//= $complaints['c_gn_complaint_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Today's Complaints</span></button>
                            <span class="info-box-number">
                                <?php
                                print_r($result_today_any[0]['today_complaints'] + $result_today_nor[0]['today_complaints']);
                                ?>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-tie"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <button type="button" title="Total Complaints" class="btn  btn-info btn-sm" data-toggle="modal" data-target="#total_compalint_Modal" data-rowid="<?//= $complaints['c_gn_complaint_id'] ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true" '="">Total Complaints</span></button>
                            <span class="info-box-number">
                                <?php print_r($result_city[0]['city'] + $result_police[0]['police'] + $result_anonymous[0]['anoy']); ?>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
<!--                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Citizen Complaints</span>
                            <span class="info-box-number"><?php print_r($result_city[0]['city']); ?></span>
                        </div>
                         /.info-box-content 
                    </div>
                     /.info-box 
                </div>-->
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-gradient-blue elevation-1"><i class="fas fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Current Online Users</span>
                            <span class="info-box-number"><?php ///print_r($result_anonymous[0]['anoy']); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row <?php echo $Complaints_Status_show; ?>">
                <div class="col-md-12">

                    <!-- PIE CHART -->
                    <div class="card card-danger <?php //echo $Complaints_Status_show;       ?>">
                        <div class="card-header">
                            <h3 class="card-title">Complaints Status</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="pieChart" style="min-height: 550px; height: 550px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6 d-none">
                    <!-- BAR CHART -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Bar Chart</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>    
            <div class="row <?php echo $Complaints_Status_show; ?>">
                <div class="col-md-12">
                    <!-- BAR CHART -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Police Station - Complaint Type</h3>
                            <?php
//print_r('<pre>');
//print_r($complaint_type);
//print_r('</pre>');
                            ?>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart_full" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

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
                                <tr>
                                    <th>Complaint No</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Received Type</th>
                                    <th>Police Station</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
// print_r('<pre>');
//print_r($result_array);//$complaints['c_gn_complaint_type'].
// print_r('</pre>');
//sc_description
                                $i = 1;
                                if (!empty($result_array)) {
                                    foreach ($result_array as $complaints) {
                                        ?>

                                        <tr>
                                            <td><?= $complaints['c_gn_complaint_reference_number'] ?></td>
                                            <td><?= $complaints['c_gn_placement_date'] ?></td>
                                            <td><?= $complaints['sc_description'] ?></td>
                                            <td><?= $complaints['complaint_category'] ?></td>
                                            <td><?= $complaints['c_gn_complaint_user_type'] ?>
                                            
                                            </td>
                                            <td><?= $complaints['ps_name'] ?></td>
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
                <!--                Annynimus complaiyts-->

            </div>
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Anonymous  Complaints</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <!--                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>-->
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Complaint No</th>
                                    <th>Date</th>
                                    <th>Category</th>
                                    <th>Police Station</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//sc_description
                                $j = 1;
                                if (!empty($anonymous_all)) {
                                    foreach ($anonymous_all as $any_complaints) {
                                        ?>

                                        <tr>
                                            <td><?= str_pad($any_complaints['c_an_complaint_id'], 6, '0', STR_PAD_LEFT); ?></td>
                                            <td><?= $any_complaints['c_an_placement_dateTime'] ?></td>

                                            <td><?= $any_complaints['complaint_category'] ?></td>

                                            <td><?= $any_complaints['ps_name'] ?></td>



                                        </tr>

                                        <?php
                                        $j++;
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



<!-- Today's Complaint modal -->
<div  class="modal fade in" data-keyboard="false" data-backdrop="static" id="complaint_status_Modal" tabindex="-1" role="dialog" aria-labelledby="complaint_statusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="complaint_statusModalLabel">Today's Complaint</h5>

            </div>

            <form class="form-horizontal" role="form" method="post" id="status_update_form" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12  col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-tie"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Police Complaints</span>
                                    <span class="info-box-number"><?php print_r($result_police_today[0]['police']); ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Citizen Complaints</span>
                                    <span class="info-box-number"><?php print_r($result_citizen_today[0]['city']); ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12  col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-white elevation-1"><i class="fas fa-user-secret"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Anonymous Complaints</span>
                                    <span class="info-box-number"><?php print_r($result_today_any[0]['today_complaints']); ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
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

<!-- end Today's Complaint -->



<!-- Total Complaint modal -->
<div  class="modal fade in" data-keyboard="false" data-backdrop="static" id="total_compalint_Modal" tabindex="-1" role="dialog" aria-labelledby="complaint_statusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="complaint_statusModalLabel">Total Complaint</h5>

            </div>

            <form class="form-horizontal" role="form" method="post" id="status_update_form" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12  col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-tie"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Police Complaints</span>
                                    <span class="info-box-number"><?php print_r($result_police[0]['police']); ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Citizen Complaints</span>
                                    <span class="info-box-number"><?php print_r($result_city[0]['city']); ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12  col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-white elevation-1"><i class="fas fa-user-secret"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Anonymous Complaints</span>
                                    <span class="info-box-number"><?php print_r($result_anonymous[0]['anoy']); ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                    </div>

                    <div class="row <?php echo $Complaints_Status_show; ?>">
                        <div class="col-12">
                            <!-- BAR CHART -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Police Station - Complaint Type</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="barChart_full4" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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

<!-- end Total Complaint -->


<script>
    $(function () {

        'use strict'

        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = {
            labels: [
                'Not attempt yet',
                'Just assign to a police officer',
                'In progress',
                'Case solved',
                'Withdrawed by the complainer',
                'Investigation is stopped by police',
                'Investigation is temporary hold',
            ],
            datasets: [
                {
                    data: [
                        //700, 500, 400, 600, 300, 
<?php
if (!empty($pie_chart_data)) {
    foreach ($pie_chart_data as $pie_date) {
        echo $pie_date['pie_count'] . ',';
        //echo $complaints['c_gn_status_of_complaint'];
        // echo '<br>';
    }
}
?>

                    ],
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#000'],
                }
            ]
        }
        var pieOptions = {
            legend: {
                display: true
            }
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-----------------
        //- END PIE CHART -
        //-----------------


        //-------------
        //- BAR CHART -//
        //-------------

        var areaChartData = {
            labels: [<?php ?>'January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [
                        {
                            label: 'Via Police Station',
                            backgroundColor: 'rgba(60,141,188,0.9)',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: [28, 48, 40, 19, 86, 27, 90]
                        },
                        {
                            label: 'By Citizen',
                            backgroundColor: 'rgba(210, 214, 222, 1)',
                            borderColor: 'rgba(210, 214, 222, 1)',
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [150, 59, 80, 81, 56, 55, 40]
                        },
                    ]
        }


        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- END BAR CHART -
        //-------------



//-------------
        //- BAR CHART FULL WIDTH -//dashboard_complaint_type
        //-------------
        // var bar_data = ['<?= '10' ?>','<?= '20' ?>','<?= '30' ?>'];
        var bar_data_this_month = <?php echo json_encode($dashboard_chart_data) ?>;

        var bar_data_last_month = <?php echo json_encode($dashboard_chart_data_last_month) ?>;

        var areaChartData = {
            //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            labels: [<?php
foreach ($complaint_type as $complaint) {
    echo "'" . $complaint['complaint_category'] . "',";
}
?>],

            datasets: [
                {
                    label: 'This Month',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    // data: [28, 48, 40, 19, 86, 27, 90,10,20,30,40,60]
                    data: bar_data_this_month
                },
                {
                    label: 'Last Month',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: bar_data_last_month
                            //data: [150, 59, 80, 81, 56, 55, 40]
                },
            ]
        }


        var barChartCanvas = $('#barChart_full').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- END BAR CHART -
        //-------------








//- BAR CHART FULL WIDTH -//dashboard_complaint_type
        //-------------
        // var bar_data = ['<?= '10' ?>','<?= '20' ?>','<?= '30' ?>'];
        var bar_data_all = <?php echo json_encode($dashboard_chart_all_data) ?>;

       // var bar_data_last_month = <?php echo json_encode($dashboard_chart_data_last_month) ?>;

        var areaChartData = {
            //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            labels: [<?php
foreach ($complaint_type as $complaint) {
    echo "'" . $complaint['complaint_category'] . "',";
}
?>],

            datasets: [
                {
                    label: 'This Month',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    // data: [28, 48, 40, 19, 86, 27, 90,10,20,30,40,60]
                    data: bar_data_all
                },
                {
                    label: 'Last Month',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                   // data: bar_data_last_month
                            //data: [150, 59, 80, 81, 56, 55, 40]
                },
            ]
        }


        var barChartCanvas = $('#barChart_full4').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- END BAR CHART -
        //-------------

    })




</script>





