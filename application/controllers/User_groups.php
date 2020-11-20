<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_groups extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_group_model', 'ugm');
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

        //$this->load->model('Dashboard_model');
//        $data['result_array'] = $this->ao->get_complaint_types(); // intial load from data controller to view
//        $data['result_array_province'] = $this->ao->get_province();
//        $data['result_array_district'] = $this->ao->get_district();
//        $data['result_array_ps'] = $this->ao->get_ps();
        $data[] ='';

        $this->load->view('includes/header');
        $this->load->view('includes/nav_bar');
        $this->load->view('user_groups', $data);
        $this->load->view('includes/footer');
    }



    function load_data() {

        echo json_encode($this->ao->load_data());
    }

   

}
