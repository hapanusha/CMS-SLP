<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cms_settings extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->model('Cms_settings_model', 'sett');
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
        $data['complaint_types'] = $this->sett->load_data_complaintTypes(); // intial load from data controller to view
        $data['complaint_categories'] = $this->sett->load_data_status();

        $this->load->view('includes/header');
        $this->load->view('includes/nav_bar');
        $this->load->view('cms_setting', $data);
        $this->load->view('includes/footer');
        }
    
    
    
        function all_complaintTypes() {

        $this->load->view('cms_setting', $data);
        }
    
        function all_status_categories() {

        $this->load->view('cms_setting', $data);
        }
        
        
    
        
        function save_complaint_type(){

            $res =  $this->sett->add_complaint_type();

        }
        
        function save_status(){

            $res =  $this->sett->add_status();

        }

}
