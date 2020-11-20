<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_users extends CI_Controller {
    
    
    public function load_data() {
        parent::__construct();
        $this->load->model('User_Model');

        //$this->load->library('excel');
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
             $this->load->model('User_Model');
        $data['res']= $this->User_Model->load_data(); // intial load from data controller to view
            
        $data['result']= $this->User_Model->load_po_details(); // intial load from data controller to view
        
        
             
             $this->load->view('includes/header');
             $this->load->view('includes/nav_bar');
             $this->load->view('manage_user', $data);
             $this->load->view('includes/footer');
             
             
            
             
             
              
		
	}
}
