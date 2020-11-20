<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_offences extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Add_offence_model', 'ao');
        $this->isLoggedIn(); 
    }

//    function add_offences() {
//        parent::__construct();
//        $this->load->model('Complaint_model');
//        
//    }

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
    public function index() {

        //$this->load->model('Dashboard_model');
        $data['result_array'] = $this->ao->get_complaint_types(); // intial load from data controller to view
        $data['result_array_province'] = $this->ao->get_province();
        $data['result_array_district'] = $this->ao->get_district();
        $data['result_array_ps'] = $this->ao->get_ps();


        $this->load->view('includes/header');
        $this->load->view('includes/nav_bar');
        $this->load->view('add_offence', $data);
        $this->load->view('includes/footer');
    }

    // get_complaint_types

    function save_offence_detail() {

        $res = $this->ao->save_offence();
    }

    function load_data() {

        echo json_encode($this->ao->load_data());
    }

    function get_complain_detail() {
        $data['complaint_ref'] = $this->input->post('complaint_ref');
        // $data['cn_nic'] = $this->input->post('cn_nic');
        echo json_encode($this->ao->view_complaint_detail($data));
    }

    ///view offence development------
    function view_offence() {
        if (isset($_GET['id'])) {
            $data['c_gn_complaint_id'] = $_GET['id'];
        } else {
            $data['c_gn_complaint_id'] = null;
        }


        $data['complain_data'] = $this->ao->view_complaint_details($data['c_gn_complaint_id']);

        $data['main_content'] = 'complain_view.php';
        $data['title'] = 'offence details';

        $this->load->view('includes/template', $data);
    }

//    ---complaint update part
    function set_complaint_data_session() {
        $this->session->set_userdata('session_complaint', $_POST['complaint_id']);

        echo true;
    }

    function load_complaint_tview() {
        if (isset($_SESSION['session_complaint'])) {
            $data['complaint_data'] = $this->db->get_where('session_complaint', array('c_gn_complaint_id' => $_SESSION['session_complaint']))->row_array();

            $data['main_content'] = 'complaint_edit.php';
            $data['title'] = 'Student Edit';
            $this->load->view('includes/template', $data);
        } else {
            $this->session->set_flashdata('flashError', 'Session Expired. Login to continue');
            redirect('student/student_lookup');
        }
    }

    function load_district() {

        echo json_encode($this->ao->load_districts());
    }

    function load_police_station() {
        echo json_encode($this->ao->load_police_stations());
    }


    // is login
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            redirect('/login');
        }
        
    }

}
