<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Make_a_complaints_as_you extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Make_a_complaint_as_you_model', 'mcnu');
    }

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


        $data['result_array_cat']       = $this->mcnu->get_complaint_types(); // intial load from data controller to view
        $data['result_array_province']  = $this->mcnu->get_province();
        $data['result_array_district']  = $this->mcnu->get_district();
        $data['result_array_ps']        = $this->mcnu->get_ps();
        $data['result_array']           = $this->mcnu->get_complaint_types();
        
        $this->load->view('includes/front_header');
        $this->load->view('includes/front_nav_bar');
        $this->load->view('make_a_complaint_as_you',$data);
        $this->load->view('includes/footer');
    }

    function save_normalUser_detail() {

        $res = $this->mcnu->save_complaint_as_you();
    }

    function load_data() {

        echo json_encode($this->mcnu->load_data());
    }
    
    
     function get_complain_details() {
        $data['complaint_ref'] = $this->input->post('complaint_ref');
       // $data['cn_nic'] = $this->input->post('cn_nic');
        echo json_encode($this->mcnu->view_complaint_details($data));
    }
    
    
    function load_district() {

        echo json_encode($this->mcnu->load_districts());
    }
    
    
    
    
    function load_police_station(){
        echo json_encode($this->mcnu->load_police_stations());
    }
    
    
    public function page($tab) {


        $data['result_array_cat']       = $this->mcnu->get_complaint_types(); // intial load from data controller to view
        $data['result_array_province']  = $this->mcnu->get_province();
        $data['result_array_district']  = $this->mcnu->get_district();
        $data['result_array_ps']        = $this->mcnu->get_ps();
        $data['result_array']           = $this->mcnu->get_complaint_types();
        $data['tab']                    = $tab;
    
        
        $this->load->view('includes/front_header');
        $this->load->view('includes/front_nav_bar');
        $this->load->view('make_a_complaint_as_you',$data);
        $this->load->view('includes/footer');
    }
    
}
