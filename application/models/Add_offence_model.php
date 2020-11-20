<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Add_offence_model extends CI_Model {

    function save_offence() {

        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');

        $u_title = $this->input->post('u_title');
        $nameWithInitial = $this->input->post('nameWithInitials');
        $callingName = $this->input->post('callingName');

        $address = $this->input->post('address');
        $nic = $this->input->post('nic');
        $contactNumber = $this->input->post('contactNumber');
        $contactNumberother = $this->input->post('contactNumberother');

        $emailAdd = $this->input->post('emailAdd');
        $province = $this->input->post('province');
        $district = $this->input->post('district');
        $ps = $this->input->post('ps');


        $asYouUserType = $this->input->post('asYouUserType');
        $toWhichStation = $this->input->post('toWhichStation');
        $location = $this->input->post('location');
        $com_type = $this->input->post('comType');
        $comInBrief = $this->input->post('comInBrief');
        $attachment = $this->input->post('attachment');
        $status_of_complaintid = $this->input->post('status_of_complaintid');
        $nortification = $this->input->post('nortification');

        $ref_number = $province . '/' . $district . '/' . date('y') . '/' . date('m') . '/' . mt_rand();
        $referenNumber = $ref_number;


        $offence['cn_title'] = $u_title;
        $offence['cn_Name_with_initials'] = $nameWithInitial;
        $offence['cn_calling_name'] = $callingName;
        $offence['cn_address'] = $address;
        $offence['cn_nic'] = $nic;
        $offence['cn_contact_number_mobile'] = $contactNumber;
        $offence['cn_contact_number_other'] = $contactNumberother;
        $offence['cn_email_address'] = $emailAdd;
        $offence['cn_district'] = $district;
        $offence['cn_nearest_police_station'] = $ps;



        //$complaint['cn_registered_date']        = date('Y-m-d H:i:s');
        // $complaint['cn_last_edited_date']       = date('Y-m-d H:i:s');

        $offence_genaral['c_gn_complaint_user_type'] = $asYouUserType;
//        $offence_genaral['c_gn_provinceOfCmplngPS']     = $province;
//        $offence_genaral['c_gn_districtOfCmplngPS']     = $district;
//        $offence_genaral['c_gn_divisionOfCmplngPS']     = $ps;
        $offence_genaral['c_gn_toWhichPS'] = $toWhichStation;
        $offence_genaral['c_gn_location'] = $location;
        $offence_genaral['c_gn_complaint_type'] = $com_type;
        $offence_genaral['c_gn_complaint_inbrief'] = $comInBrief;
        $offence_genaral['c_gn_attachment'] = $attachment;
        $offence_genaral['c_gn_status_of_complaint_id'] = $status_of_complaintid;
        $offence_genaral['c_gn_notifiction_status'] = $nortification;
        $offence_genaral['c_gn_c_loginUserID'] = $_SESSION['u_id'];
        $offence_genaral['c_gn_c_date'] = $curr_date;


        //$complaint_genaral['c_gn_complaint_reference_number']   = $province.'/'.$distric;
        // reference number generating using mt_rand function
        //$offence_genaral['c_gn_complaint_reference_number'] = $province . '/' . $distric . '/' . date('y') . '/' . date('m') . '/' . mt_rand();
        $offence_genaral['c_gn_complaint_reference_number'] = $referenNumber;

        // $complaint_genaral['c_gn_complaint_id']      = 12; 

        $this->db->insert('cms_citizen_normal', $offence);

        // last inserted ID taken here
        $citizen_id = $this->db->insert_id();

        $offence_genaral['c_gn_citizen_id'] = $citizen_id;

        $this->db->insert('cms_complaint_general', $offence_genaral);


        $this->sendEmail($emailAdd, $referenNumber, $u_title, $callingName); ////email


        return;
    }

    function load_data() {
        $this->db->select('*');
        $this->db->from('cms_citizen_normal');
        return $res = $this->db->get()->result_array();
    }

//------view functions-------
    function view_complaint_details($compalin_id) {

        $this->db->select('*');
        $this->db->where('c_gn_complaint_id', $compalin_id);
        $complain_details = $this->db->get('cms_complaint_general')->row_array();

        return $complain_details;
    }

//------edit function----
    function set_complaint_data_session() {
        $this->session->set_userdata('sessionstu', $_POST['id']);

        echo true;
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
    public function sendEmail($receiver, $referenNumber, $u_title, $callingName) {
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

        $message = "<b>Dear " . $title . " &nbsp; " . $c_calling_name . ",.</b><br><br>";
        $message .= "<b>This is to inform you that we are processing your complaint/information provided.</b><br>";
        $message .= "<b>use the provided REFERENCE NUMBER to be updated about your complaint/provided information.</b>";
        $message .= "<h4>Link to folllow: &nbsp; " . XXX . "    <br> Your Reference Number: &nbsp; " . $ref_number . "    </h4>";


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

    //------view functions-------
    function view_complaint_detail($compalin_id) {

        $this->db->select('*');
        $this->db->join('cms_citizen_normal ccn', 'ccn.cn_citizen_id = cms_complaint_general.c_gn_citizen_id');
        $this->db->join('cms_status_category_of_complaint cscc', 'cscc.sc_id = cms_complaint_general.c_gn_status_of_complaint');
        $this->db->join('cms_complaint_type cct', 'cct.id = cms_complaint_general.c_gn_complaint_type');



        $this->db->where('c_gn_complaint_reference_number', $compalin_id['complaint_ref']); ///this should be change to ref number
        //$this->db->where('ccn.cn_nic', $compalin_id['cn_nic']);///this should be change to ref number
        $complain_details = $this->db->get('cms_complaint_general')->row_array();
        //var_dump($complain_details);
        return $complain_details;
    }

}
