<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_police_stations extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->model('Police_Station_model', 'po');
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
        $data['result_array'] = $this->po->load_data(); // intial load from data controller to view

        $this->load->view('includes/header');
        $this->load->view('includes/nav_bar');
        $this->load->view('manage_police_station', $data);
        $this->load->view('includes/footer');
    }
    
    
    function all_ps() {

        $this->load->view('manage_police_station', $data);
    }
    
    function get_policeStation_details() {
        $data['ps_police_station_id'] = $this->input->post('ps_police_station_id');
        echo json_encode($this->po->view_ps_details($data));
    }
    
    
    

    function update_police_station() {


        $ps_address = $this->input->post('ps_address');
        $ps_contact_number = $this->input->post('ps_contact_number');
        $ps_contact_number_other = $this->input->post('ps_contact_number_m');
        $ps_fax = $this->input->post('ps_fax');
        $ps_remarks = $this->input->post('ps_remarks');
        
        $ps_oic = $this->input->post('ps_oic');
        
        
        
        

        $data['ps_address'] = $ps_address;
        $data['ps_contact_number'] = $ps_contact_number;
        $data['ps_contact_number_other'] = $ps_contact_number_other;
        $data['ps_fax'] = $ps_fax;
        $data['ps_remarks'] = $ps_remarks;
        $data['ps_oic'] = $ps_oic;
        
        
        $data['ps_police_station_id'] = $this->input->post('ps_police_station_id');
        $data['user_id'] = $this->input->post('user_id');
        
        
   


        echo json_encode($this->po->update_policeStations($data));
    }

}
