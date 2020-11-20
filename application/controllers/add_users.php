<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_Model', 'au');
        $this->load->library('session');
        $this->load->library('email');
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
        $this->load->model('User_Model');

        $data['result_array_province'] = $this->au->get_province(); // intial load from data controller to view
        $data['result_array_district'] = $this->au->get_district();
        $data['result_array_ps'] = $this->au->get_ps();
        $data['result_array_division'] = $this->au->get_division();
        $data['result_array_userGroup'] = $this->au->get_userGroup();
        $data['result_array'] = $this->au->load_data();




        $this->load->view('includes/header');
        $this->load->view('includes/nav_bar');
        $this->load->view('add_user', $data);
        $this->load->view('includes/footer');
    }

    function save_adduser() {


        $addUser['po_officer_number']                   = $this->input->post('off_number');
        $addUser['po_title']                            = $this->input->post('off_title');
        $addUser['po_name_with_initials']               = $this->input->post('off_nameWithInitial');
        $addUser['po_calling_name']                     = $this->input->post('off_callingName');
        $addUser['po_rank_id']                          = $this->input->post('off_rank');
        $addUser['po_province_id']                      = $this->input->post('off_province'); 
        $addUser['po_district_id']                      = $this->input->post('off_district');     
        $addUser['po_division_id']                      = $this->input->post('off_division');
        $addUser['po_police_station_id']                = $this->input->post('off_ps');
        $addUser['po_nic_number']                       = $this->input->post('off_nic');
        $addUser['po_contact_number_mobile']            = $this->input->post('off_contNo');
        $addUser['po_contact_number_other']             = $this->input->post('off_contNoOthr');
        $addUser['po_email_address']                    = $this->input->post('off_email');
        $addUser['po_residence_address_no']             = $this->input->post('off_address_no');
        $addUser['po_residence_address_street']         = $this->input->post('off_address_street');
        $addUser['po_residence_address_town']           = $this->input->post('off_address_town');
        $addUser['po_residence_address_district']       = $this->input->post('off_address_district');
        $addUser['po_highest_qualification_achieved']   = $this->input->post('off_hgtAcdmcQulfctn');
        $addUser['po_other_qualification__achieved']    = $this->input->post('off_othrQulfct');

        $addUser['po_status']                           = $this->input->post('off_userStatus');
        $addUser['po_user_group_id']                    = $this->input->post('off_userGroup');
        
        $password = mt_rand();
        
        $email_pass['password'] = $password;
        
        $off_password = md5($password);
    
        $addUser['po_password']                         = $off_password;
        

        //user name and password of poloce officer:
        $addUser['po_user_name'] = $this->input->post('off_callingName').$this->input->post('off_number');



//profile image upload stsrt---- 
        $name_img = $_FILES['off_prflPic']['name'];
        $temp_info = explode('.', $name_img);
        $ary_len = count($temp_info);

        $config['upload_path'] = './uploads/officer_profile/';
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $config['max_size'] = 100000;
        $config['overwrite'] = TRUE;
        $config['file_name'] = $this->input->post('off_number');

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        if ($this->upload->do_upload('off_prflPic')) {
            $error = array('error' => $this->upload->display_errors());
            $data1['upload_data'] = $this->upload->data('file_name');
            $image_name = $data1['upload_data'];
            $addUser['po_profile_picture'] = $image_name;
            
            $res = $this->au->add_user_test($addUser, $email_pass);
            
            $off_prflPic = NULL;
            //$off_prflPic = 'uploads/officer_profile/'.$image_data['file_name'];
        } else {
            $image_data = $this->upload->data();
            $off_prflPic = 'uploads/officer_profile/' . $image_data['file_name'];
        }

        
        
        
        
        
        
        
        
        // $this->au->sendEmail($this->input->post('off_number'));
        //$this->au->sendEmail($this->input->post('off_email'));
        
        
    }

    function load_data() {

        echo json_encode($this->au->load_data());
    }

    function load_district() {

        echo json_encode($this->au->load_districts());
    }

    function load_division() {
        echo json_encode($this->au->load_divisions());
    }

    function load_police_station() {
        echo json_encode($this->au->load_police_stations());
    }
    
    function post_officer_number(){
       $poUser['off_number']     = $this->input->post('off_number');
        echo json_encode($this->au->check_officer_number($poUser));
   }

}
