<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_offences extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Manage_offence_model', 'mo');
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
        $data['result_array'] = $this->mo->get_all_complaints(); // intial load from data controller to view

        $data['result_array_complain'] = $this->mo->get_complaint_status();

        $this->load->view('includes/header');
        $this->load->view('includes/nav_bar');
        $this->load->view('manage_offence', $data);
        $this->load->view('includes/footer');
    }

    function all_complaints() {

        $this->load->view('manage_offence', $data);
    }

    function get_complain_details() {
        $data['c_gn_complaint_id'] = $this->input->post('c_gn_complaint_id');
        echo json_encode($this->mo->view_complaint_details($data));
    }

    function update_complaint() {


        $complaint_status = $this->input->post('complaint_status');
        $complain_details = $this->input->post('complain_details');

        $data['complaint_status'] = $complaint_status;
        $data['complain_details'] = $complain_details;
        $data['complain_id'] = $this->input->post('complaint_id');
        $data['user_id'] = $this->input->post('user_id');


        echo json_encode($this->mo->update_complaint_status($data));
    }

}
