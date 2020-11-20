<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    var $user_roal = '';
    var $police_station = '';

    public function complaints() {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->isLoggedIn();
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');

        // $this->load->library('excel');
    }

    public function index() {
        $user_roal = $this->session->userdata('u_group');

        $this->load->model('Dashboard_model');
        $data['result_array'] = $this->Dashboard_model->get_all_complaints(); // intial load from data controller to view
        $data['result_anonymous'] = $this->Dashboard_model->get_Anonymous_complaints();
        $data['result_city'] = $this->Dashboard_model->get_citizen_complaints();
        $data['result_police'] = $this->Dashboard_model->get_police_complaints();
        
        //------today's complaint details-------
        $data['result_police_today'] = $this->Dashboard_model->get_todays_police_complaints();
        $data['result_citizen_today'] = $this->Dashboard_model->get_todays_citizen_complaints();

        $data['result_today_any'] = $this->Dashboard_model->get_today_complaints_any();
        $data['result_today_nor'] = $this->Dashboard_model->get_today_complaints();

        $data['anonymous_all'] = $this->Dashboard_model->get_Anonymous_complaints_details();

        $data['pie_chart_data'] = $this->Dashboard_model->get_data_dashboard_pie_chart();

        //--------------bar chart thismonth/last month----
        $data['complaint_type'] = $this->Dashboard_model->get_complaint_types();
        $data['dashboard_complaint_type'] = $this->Dashboard_model->get_complain_type_dashboard_chart();
        /* ========================= dashboard filter user wise===============  */
        //echo 'eeee' . $user_roal;

        switch ($user_roal) {
            case ROLE_ADMIN_USER:
                $data['Complaints_Status_show'] = '';
                break;
            case ROLE_MANAGER_USER:
                $data['Complaints_Status_show'] = 'd-none';
                break;
            case ROLE_NORMAL_USER:
                $data['Complaints_Status_show'] = 'd-none';
                break;
            case ROLE_SUPER_USER:
                $data['Complaints_Status_show'] = '';
                break;
        }


//       // if(($user_roal != ROLE_SUPER_USER) || ($user_roal == 1))
//        $data['Complaints_Status_show'] = 'd-none';
//        //elseif($user_roal == 1)
//          //  $data['Complaints_Status_show'] = 'd-none';
//       // else
//        $data['Complaints_Status_show'] = ' ';
        /* ========================= dashboard filter user wise===============  */


        //$data['dashboard_chart_data'] = array(10,20,300);
        // $data['dashboard_chart_data'] = [];
        
        
        
        //-----dashboard data for this month 
        $this_month_data = array();
        foreach ($data['complaint_type'] as $complain) {

            //$data['dashboard_chart_data'] = $this->Dashboard_model->get_complain_this_month($com['id']);
            array_push($this_month_data, $this->Dashboard_model->get_complain_this_month($complain['id']));
        }
        $data['dashboard_chart_data'] = $this_month_data;
        
        
        //-----dashboard data for last month 
        $last_month_data = array();
        foreach ($data['complaint_type'] as $complain) {
            array_push($last_month_data, $this->Dashboard_model->get_complain_last_month($complain['id']));
        }
        $data['dashboard_chart_data_last_month'] = $last_month_data;
        
        
        
        
        
        //-----dashboard data for all month 
        $all_data = array();
        foreach ($data['complaint_type'] as $complain) {

            //$data['dashboard_chart_data'] = $this->Dashboard_model->get_complain_this_month($com['id']);
            array_push($all_data, $this->Dashboard_model->get_all_complain($complain['id']));
        }
        $data['dashboard_chart_all_data'] = $all_data;
        
        
                
        
        //dashboard_chart_data
        

        $this->load->view('includes/header');
        $this->load->view('includes/nav_bar');
        $this->load->view('dashboard', $data);
        $this->load->view('includes/footer');
    }

    function show_complaints() {


        $this->load->view('dashboard', $data);
    }

//    function bar_chart_disply($data){
//        
//        $data = $this->Dashboard_model->get_complain_this_month($data);
//        
//        
//    }
    // is login
    function isLoggedIn() {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {
            redirect('/login');
        }
    }

}
