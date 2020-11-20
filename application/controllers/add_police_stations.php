<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_police_stations extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Police_Station_model', 'aps');
        
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            
            //$data['result_array_ps']=   $this->aps->get_ps;  //intial load from data controller to view
            $data['result_array_province']=   $this->aps->get_province(); 
            $data['result_array_district']=   $this->aps->get_district();
            $data['result_array_division']=   $this->aps->get_division();
            
            
            
        
            
             $this->load->view('includes/header');
             $this->load->view('includes/nav_bar');
             $this->load->view('add_police_station',$data);
             $this->load->view('includes/footer');
		
	}
        
        function save_policeStation_detail(){

            $res =  $this->aps->add_police_station();

        }
        
        function load_data(){
            
            echo json_encode($this->aps->load_data());
            
        }
        
//        function load_policeOfficer(){
//            
//            echo json_encode($this->aps->load_officers());
//            
//        }
        
        function load_district() {

        echo json_encode($this->aps->load_districts());
    }
    
    
    function load_division(){
        echo json_encode($this->aps->load_divisions());
    }
}
