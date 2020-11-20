<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Make_a_complaint_as_you_model extends CI_Model {

    function save_complaint_as_you() {
        
        $date            = new DateTime("now");
        $curr_date       = $date->format('Y-m-d ');

        $u_title                = $this->input->post('u_title ');
        $nameWithInitial        = $this->input->post('nameWithInitials');
        $callingName            = $this->input->post('callingName');
        $address                = $this->input->post('address');
        $nic                    = $this->input->post('nic');
        $contactNumber          = $this->input->post('contactNumber');
        $contactNumberother     = $this->input->post('contactNumberother');
        $emailAdd               = $this->input->post('emailAdd');
        $province            	= $this->input->post('province');
        $distric                = $this->input->post('distric');
        $p_station              = $this->input->post('p_station');
        $asYouUserType          = $this->input->post('asYouUserType');
        $toWhichStation         = $this->input->post('toWhichStation');
        $location               = $this->input->post('location');
        $com_type               = $this->input->post('comType');
        $com_brief              = $this->input->post('comInBrief');
        $attachment             = $this->input->post('attachment');
        $notification           = $this->input->post('nortification');
        $status_of_complaintid= $this->input->post('status_of_complaintid');



        $complaint['cn_title']                  = $u_title;
        $complaint['cn_Name_with_initials']     = $nameWithInitial;
        $complaint['cn_calling_name']           = $callingName;
        $complaint['cn_address']                = $address;
        $complaint['cn_nic']                    = $nic;
        $complaint['cn_contact_number_mobile']  = $contactNumber;
        $complaint['cn_contact_number_other']   = $contactNumberother;
        $complaint['cn_email_address']          = $emailAdd;
        $complaint['cn_province']               = $province;
        $complaint['cn_district']               = $distric;
        $complaint['cn_nearest_police_station'] = $p_station;
        //$complaint['cn_registered_date']        = date('Y-m-d H:i:s');
       // $complaint['cn_last_edited_date']       = date('Y-m-d H:i:s');
        
        
//        $complaint_genaral['c_gn_provinceOfCmplngPS']     = $province;
//        $complaint_genaral['c_gn_districtOfCmplngPS']     = $district;
//        $complaint_genaral['c_gn_divisionOfCmplngPS']     = $p_station;

        
        $complaint_genaral['c_gn_complaint_user_type']          = $asYouUserType;
        $complaint_genaral['c_gn_toWhichPS']                    = $toWhichStation;
        $complaint_genaral['c_gn_location']                     = $location;
        $complaint_genaral['c_gn_complaint_type']               = $com_type;
        $complaint_genaral['c_gn_complaint_inbrief']            = $com_brief;
        $complaint_genaral['c_gn_attachment']                   = $attachment;
        $complaint_genaral['c_gn_notifiction_status']           = $notification;
        $complaint_genaral['c_gn_status_of_complaint_id']       = $status_of_complaintid;
        $complaint_genaral['c_gn_c_loginUserID']                = 1;
        $complaint_genaral['c_gn_c_date']                       = $curr_date;
        
         
        //$prvince_code = $this->get_province_code($province);
        
        
        //$complaint_genaral['c_gn_complaint_reference_number']   = $province.'/'.$distric;
         $complaint_genaral['c_gn_complaint_reference_number']   = $province.'/'.$distric.'/'.date('y').'/'.date('m').'/'.mt_rand();
        
         
         $ref = $province.'/'.$distric.'/'.date('y').'/'.date('m').'/'.mt_rand();//referecn no for email
       // $complaint_genaral['c_gn_complaint_id']      = 12;
        
//                    
//                }cms_complaint_general
//
        
//         $complaint['cn_registered_date']        = date('Y-m-d H:i:s');
//        $complaint['cn_last_edited_date']       = date('Y-m-d H:i:s');
        
        
        $this->db->insert('cms_citizen_normal', $complaint);
        // last inserted ID taken here
        $citizen_id  = $this->db->insert_id();
        
        
        
        
        $complaint_genaral['c_gn_citizen_id']  = $citizen_id;
        
        $this->db->insert('cms_complaint_general', $complaint_genaral);
        
        
        
         //$this->sendEmail($emailAdd, $ref);////email
         $this->sendEmail2($emailAdd, $ref, $u_title, $callingName); ////email
        
        
        return;
        
//        $this->db->insert('cms_complaint_general', $complaint_genaral);
//        return;
    }
    
    
    
    
    public function sendEmail2($receiver, $referenNumber, $u_title, $callingName) {
//        
//        
//        //-capturing user name password of police officer--
        //$userName = $this->input->post('off_callingName').$this->input->post('off_number');

        $ref_number = $referenNumber;
        $c_title = $u_title;
        $c_calling_name = $callingName;

        $to = $receiver;
        $subject = "Acknowledgement of yourcomplaint to Sri Lanka Police";

        switch ($c_title) {
            case 0:
                $title = "Mr.";
                break;
            case 1:
                $title = "Mrs.";
                break;
            case 2:
                $title = "MS.";
                break;
            case 3:
                $title = "Rev.";
                break;
            default:
                $title = "Ot.";
        }

        $message = "<b>Hi  &nbsp;" . $title . " &nbsp; " . $c_calling_name . ",.</b><br><br>";
        $message .= "<b>This is to inform you that we will be processing your complaint/information provided right now.</b><br>";
        $message .= "<b>use the provided REFERENCE NUMBER to be updated about your complaint/provided information.</b>";
        $message .= "<h4>Link to folllow: &nbsp;  www.police.lk/make_a_complaints     <br> Your Reference Number: &nbsp; " . $ref_number . "    </h4>";


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
    
    
    
//----------to get province code to ref number------
    function get_province_code($data){
        $this->db->select('*');
        $this->db->from('cms_province');
        $this->db->where('id', $data);
       // return $res = $this->db->get()->_fetch_assoc();
    }
    
    
    
    function load_data() {
        $this->db->select('*');
        $this->db->from('cms_citizen_normal');
        return $res = $this->db->get()->result_array();
    }
    function get_complaint_types() {

        $this->db->select('*');
        $this->db->from('cms_complaint_type');
        return $res = $this->db->get()->result_array();
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
     
    //------view functions-------
    function view_complaint_details($compalin_id) {

        $this->db->select('*');
        $this->db->join('cms_citizen_normal ccn', 'ccn.cn_citizen_id = cms_complaint_general.c_gn_citizen_id');
        $this->db->join('cms_status_category_of_complaint cscc', 'cscc.sc_id = cms_complaint_general.c_gn_status_of_complaint');
        $this->db->join('cms_complaint_type cct', 'cct.id = cms_complaint_general.c_gn_complaint_type');
        
        
        
        $this->db->where('c_gn_complaint_reference_number', $compalin_id['complaint_ref']);///this should be change to ref number
        //$this->db->where('ccn.cn_nic', $compalin_id['cn_nic']);///this should be change to ref number
        $complain_details = $this->db->get('cms_complaint_general')->row_array();
        //var_dump($complain_details);
        return $complain_details;
    }
    
    
    function load_districts() {

        $id = $this->input->post('id');

        $this->db->select('*');
        $this->db->from('cms_district');
        $this->db->where('d_province_id', $id);
        return $result = $this->db->get()->result_array();
    }

    function load_police_stations() {

        $id = $this->input->post('id');

        $this->db->select('*');
        $this->db->from('cms_police_station');
        $this->db->where('ps_district_id', $id);
        return $result = $this->db->get()->result_array();
    }
    
    
    
    
    //send confirm mail
//    public function sendEmail($receiver, $ref_number) {
//        
//        
//        //-capturing user name password of police officer--
//        
//    
//        
//         $to = $receiver;
//         $subject = "Login Details of Complaint Management System of Sri Lanka Police";
//         
//
//         $message = "<b>The user name and the password for loging to Complaint Management System of Sri Lanka Police (CMS-SLP) are as follows,.</b>";
//         $message .= "<h4>User Name: &nbsp; ".$userName."    <br> Password: &nbsp; ".$password."    </h4>";
//         
//         
//         $header = "From:SL.Police@gov.lk \r\n";
//         $header .= "Cc:".$receiver." \r\n";
//         $header .= "MIME-Version: 1.0\r\n";
//         $header .= "Content-type: text/html\r\n";
//         
//         $retval = mail ($to,$subject,$message,$header);
//         
//         if( $retval == true ) {
//            echo "Message sent successfully...";
//         }else {
//            echo "Message could not be sent...";
//         }
//        
//     
//    }

    
    
    
}
