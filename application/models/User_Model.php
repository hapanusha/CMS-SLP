<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User_Model extends CI_Model {

    function add_user_test($addUser,$email_pass) {

//        $off_number = $this->input->post('off_number');
//        $off_title = $this->input->post('off_title');
//        $off_nameWithInitial = $this->input->post('off_nameWithInitial');
//        $off_callingName = $this->input->post('off_callingName');
//        $off_rank = $this->input->post('off_rank');
//        $off_province = $this->input->post('off_province');
//        $off_district = $this->input->post('off_district');
//        $off_division = $this->input->post('off_division');
//        $off_ps = $this->input->post('off_ps');
//        $off_nic = $this->input->post('off_nic');
//        $off_contNo = $this->input->post('off_contNo');
//        $off_contNoOthr = $this->input->post('off_contNoOthr');
//        $off_email = $this->input->post('off_email');
//        $off_address_no = $this->input->post('off_address_no');
//        $off_address_street = $this->input->post('off_address_street');
//        $off_addressoff_address_town = $this->input->post('off_address_town');
//        $off_address_district = $this->input->post('off_address_district');
//        $off_hgtAcdmcQulfctn = $this->input->post('off_hgtAcdmcQulfctn');
//        $off_othrQulfct = $this->input->post('off_othrQulfct');
//        $off_prflPic = $this->input->post('off_prflPic');
//        $off_userGroup = $this->input->post('off_userGroup');
//        $off_userStatus = $this->input->post('off_userStatus');
//        
//        //user name and password of poloce officer:
//        $off_userName = $this->input->post('off_callingName').$this->input->post('off_number');
//        $password = mt_rand();
//        $off_password = md5($password);
//        $addUser['po_officer_number']                   = $off_number;
//        $addUser['po_title']                            = $off_title;
//        $addUser['po_name_with_initials']               = $off_nameWithInitial;
//        $addUser['po_calling_name']                     = $off_callingName;
//        $addUser['po_rank_id']                          = $off_rank;
//        $addUser['po_province_id']                      = $off_province; 
//        $addUser['po_district_id']                      = $off_district;     
//        $addUser['po_division_id']                      = $off_division;
//        $addUser['po_police_station_id']                = $off_ps;
//        $addUser['po_nic_number']                       = $off_nic;
//        $addUser['po_contact_number_mobile']            = $off_contNo;
//        $addUser['po_contact_number_other']             = $off_contNoOthr;
//        $addUser['po_email_address']                    = $off_email;
//        $addUser['po_residence_address_no']             = $off_address_no;
//        $addUser['po_residence_address_street']         = $off_address_street;
//        $addUser['po_residence_address_town']           = $off_addressoff_address_town;
//        $addUser['po_residence_address_district']       = $off_address_district;
//        $addUser['po_highest_qualification_achieved']   = $off_hgtAcdmcQulfctn;
//        $addUser['po_other_qualification__achieved']    = $off_othrQulfct;
//        $addUser['po_profile_picture']                  = $off_prflPic;
//        
//        
//        
//        $addUser['po_status']                           = $off_userStatus;
//        $addUser['po_user_group_id']                    = $off_userGroup;
//        $addUser['po_user_name']                        = $off_userName;
//        $addUser['po_password']                         = $off_password;
//        
//        
        $addUserLoginDetails['user_status'] = $addUser['po_status'];
        $addUserLoginDetails['user_group'] = $addUser['po_user_group_id'];
        
        $addUserLoginDetails['user_name'] = $addUser['po_user_name'];
        
        $addUserLoginDetails['user_password'] = $addUser['po_password'];
        


         $this->sendEmail($addUser['po_email_address'] , $email_pass['password']);
        //var_dump($addUser);


        $this->db->insert('cms_police_officer', $addUser);



        // last inserted ID taken here
        $officer_id = $this->db->insert_id();

        $addUserLoginDetails['user_employee'] = $officer_id;

        $this->db->insert('cms_user', $addUserLoginDetails);

        return;
    }

    //send confirm mail
    public function sendEmail($receiver, $off_password) {


        //-capturing user name password of police officer--

        $userName = $this->input->post('off_callingName') . $this->input->post('off_number');

        $password = $off_password;





        $to = $receiver;
        $subject = "Login Details of Complaint Management System of Sri Lanka Police";


        $message = "<b>The user name and the password for loging to Complaint Management System of Sri Lanka Police (CMS-SLP) are as follows,.</b>";
        $message .= "<h4>User Name: &nbsp; " . $userName . "    <br> Password: &nbsp; " . $password . "    </h4>";


        $header = "From:SL.Police@gov.lk \r\n";
        $header .= "Cc:" . $receiver . " \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail($to, $subject, $message, $header);

        if ($retval == true) {
            echo "Message sent successfully...";
        } else {
            echo "Message could not be sent...";
        }
    }

    //activate account
//    function verifyEmail($key) {
//        $data = array('status' => 1);
//        $this->db->where('md5(email)', $key);
//        return $this->db->update('employee', $data);    //update status as 1 to make active user
//    }




    function load_data() {
        $this->db->select('*');
        //$this->db->from('cms_police_officer');
        return $res = $this->db->get('cms_police_officer')->result_array();
    }

    function get_province() {
        $this->db->select('*');
        $this->db->from('cms_province');
        return $res = $this->db->get()->result_array();
    }

    function get_district() {
        $this->db->select('*');
        $this->db->from('cms_district');
        return $res = $this->db->get()->result_array();
    }

    function get_ps() {
        $this->db->select('*');
        $this->db->from('cms_police_station');
        return $res = $this->db->get()->result_array();
    }

    function get_division() {
        $this->db->select('*');
        $this->db->from('cms_division');
        return $res = $this->db->get()->result_array();
    }

    function get_userGroup() {
        $this->db->select('*');
        $this->db->from('cms_usergroup');
        return $res = $this->db->get()->result_array();
    }

    function load_districts() {

        $id = $this->input->post('id');

        $this->db->select('*');
        $this->db->from('cms_district');
        $this->db->where('d_province_id', $id);
        return $result = $this->db->get()->result_array();
    }

    function load_divisions() {

        $id = $this->input->post('id');

        $this->db->select('*');
        $this->db->from('cms_division');
        $this->db->where('div_disctrict_id', $id);
        return $result = $this->db->get()->result_array();
    }

    function load_police_stations() {

        $id = $this->input->post('id');

        $this->db->select('*');
        $this->db->from('cms_police_station');
        $this->db->where('ps_division_id', $id);
        return $result = $this->db->get()->result_array();
    }

    function load_po_details() {
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');
        
        $this->db->select('*');
        $this->db->join('cms_police_station', 'cms_police_station.ps_police_station_id = cms_police_officer.po_police_station_id');
        $this->db->join('cms_rank', 'cms_rank.id = cms_police_officer.po_rank_id');
        
        if($user_roal != ROLE_SUPER_USER){
            $this->db->where("cms_police_officer.po_police_station_id", $police_station);
        }
        return $res = $this->db->get('cms_police_officer')->result_array();
    }
    
    //----logged police officer-----
    function load_police_officer(){
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');
        $user_id = $this->session->userdata('u_id');
        
        $this->db->select('*');
        $this->db->join('cms_police_station', 'cms_police_station.ps_police_station_id = cms_police_officer.po_police_station_id');
        $this->db->join('cms_rank', 'cms_rank.id = cms_police_officer.po_rank_id');
        
        $this->db->where("cms_police_officer.po_police_station_id", $police_station);
        $this->db->where("cms_police_officer.po_id", $user_id);
        //$this->db->where("cms_police_officer.po_police_station_id", $police_station);
        

        return $res = $this->db->get('cms_police_officer')->result_array();
    }
    
    
        function check_officer_number($id){
       $this->db->select('*');
       $this->db->from('cms_police_officer');
       $this->db->where('po_officer_number', $id['off_number']);
       
       $id = $this->db->get()->num_rows();
       return $id;
        //$result = $this->db->get()->result_array();
       //return $this->num_rows($result);
       
   }

}
