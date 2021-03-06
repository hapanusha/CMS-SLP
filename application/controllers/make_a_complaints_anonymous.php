<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Make_a_complaints_anonymous extends CI_Controller {
    
    
    function __construct() {
        parent::__construct();
        $this->load->model('Make_a_complaint_anonymous_model', 'mca');
        
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
            //$this->load->model('Dashboard_model');
        $data['result_array_cat']        = $this->mca->get_complaint_types(); // intial load from data controller to view
        //$data['result_array_province']  = $this->mca->get_province();
        $data['result_array_district']  = $this->mca->get_district();
        $data['result_array_ps']        = $this->mca->get_ps();
            
             $this->load->view('includes/front_header');
             $this->load->view('includes/front_nav_bar');
             $this->load->view('make_a_complaint_anonymous',$data);
             $this->load->view('includes/footer');
             
             
             
              
             
	}
        
        function save_anony_detail(){

            $res =  $this->mca->save_complaint();

        }
        
        function load_data(){
            
            echo json_encode($this->mca->load_data());
            
        }
           
}
