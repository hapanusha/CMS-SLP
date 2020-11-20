<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anushas extends CI_Controller {
    
    
    function Anushas() {
        parent::__construct();
        $this->load->model('Anusha_model');
        
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
            $data['title_new'] = $this->Anusha_model->get_title();
            
             $this->load->view('includes/header');
             $this->load->view('includes/nav_bar');
             $this->load->view('anusha', $data);
             $this->load->view('includes/footer');
             
             
             
              
             
	}
}
