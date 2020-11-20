<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles_edit extends CI_Controller {
    
    
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
            
            
             $this->load->view('includes/header');
             $this->load->view('includes/nav_bar');
             $this->load->view('profile_edit');
             $this->load->view('includes/footer');
             
        }
}