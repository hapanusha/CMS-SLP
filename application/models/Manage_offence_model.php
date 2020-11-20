<?php 
class Manage_offence_model extends CI_Model {


    function get_all_complaints() {
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');
        

        $this->db->select('*');
        $this->db->join('cms_status_category_of_complaint cscc', 'cscc.sc_id=cms_complaint_general.c_gn_status_of_complaint');
        $this->db->join('cms_complaint_type ccc', 'ccc.id=cms_complaint_general.c_gn_complaint_type');
        
        $this->db->join('cms_police_station', 'cms_police_station.ps_police_station_id = cms_complaint_general.c_gn_toWhichPS');
        
         if($user_roal != ROLE_SUPER_USER){
            $this->db->where("cms_police_station.ps_police_station_id", $police_station);
        }
        
        //$this->db->where_in('reg.center_id', $branchlist);
        //$this->db->where_in('de.faculty_id', $faclist);
       // $this->db->where('cms_complaint_general.', 1);
        $result_array = $this->db->get('cms_complaint_general')->result_array();
        return $result_array;
    }
    
    function get_Anonymous_complaints(){
        $this-> db->select('count(*) as anoy');
        $result_anonymous = $this->db->get('cms_complaint_anonymous')->result_array();
        return $result_anonymous;
        
    }
    
    function get_citizen_complaints(){
        
        $this-> db->select('count(*) as city') ;
        $this->db->where("cms_complaint_general.c_gn_complaint_user_type",'1');
        
        
        $result_city = $this->db->get('cms_complaint_general')->result_array();
        return $result_city;
    }
    
    
    function get_police_complaints(){
        
        $this-> db->select('count(*) as police');
        $this->db->where("cms_complaint_general.c_gn_complaint_user_type",'0');
        
        $result_police = $this->db->get('cms_complaint_general')->result_array();
        return $result_police;
    }
    
    function get_today_complaints(){
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');
         
        $this-> db->select('count(*) as today_complaints');
        $this->db->where("cms_complaint_general.c_gn_c_date", $curr_date);
        
        $result_today = $this->db->get('cms_complaint_general')->result_array();
        return $result_today;
    }

//------view functions-------
    function view_complaint_details($compalin_id) {

        $this->db->select('*');
        $this->db->join('cms_citizen_normal ccn', 'ccn.cn_citizen_id = cms_complaint_general.c_gn_citizen_id');
        $this->db->join('cms_status_category_of_complaint cscc', 'cscc.sc_id = cms_complaint_general.c_gn_status_of_complaint');
        $this->db->join('cms_citizen_normal cn', 'cn.cn_citizen_id = cms_complaint_general.c_gn_citizen_id');
        $this->db->where('c_gn_complaint_id', $compalin_id['c_gn_complaint_id']);
        $complain_details = $this->db->get('cms_complaint_general')->row_array();
        return $complain_details;
    }
    
    
    
    
    function get_complaint_status() {
        $this->db->select('*');
        $this->db->from('cms_status_category_of_complaint');
        return $res = $this->db->get()->result_array();
    }
    
    
    
    
   function update_complaint_status($data) {
       // return $data;
        $this->db->trans_begin();
        $update_data = array(
           
            'c_edited_by_whom' => $this->session->userdata('u_id'),
            'c_edited_date' => date("Y-m-d h:i:s"),
            'c_status_category_id' => $data['complaint_status'],
            'c_action_description' => $data['complain_details'],
            'c_compnt_id' => $data['complain_id']
        );
        //$this->db->where('c_compnt_id', $data['complain_id']);
        $result = $this->db->insert('cms_status_of_complaint', $update_data);
        $st_id = $this->db->insert_id();
       
       
        $update_status = array('c_gn_status_of_complaint'=>$data['complaint_status'],
                                'c_gn_status_of_complaint_id'=>$st_id);
       
        $this->db->where('c_gn_complaint_id',$data['complain_id']);
        $result = $this->db->update('cms_complaint_general', $update_status);

       
       
       
        $this->db->select('*, (select sc_description from cms_status_category_of_complaint as cscc where cscc.sc_id = ccg.c_gn_complaint_type)as complaint_status');
        $this->db->from('cms_citizen_normal ccn');
        $this->db->join('cms_complaint_general ccg', 'ccg.c_gn_citizen_id = ccn.cn_citizen_id');
       
        $this->db->where('ccg.c_gn_complaint_id', $data['complain_id']);
        $result = $this->db->get()->result_array();
        //$result[0]['c_gn_complaint_reference_number'];
       
        $emailAdd = $result[0]['cn_email_address'];
        $referenNumber= $result[0]['c_gn_complaint_reference_number'];
        $u_title = $result[0]['cn_title'];
        $callingName = $result[0]['cn_calling_name'];
       
       
        $complain_status = $result[0]['complaint_status'];
       
       
       
        $this->sendEmail($emailAdd, $referenNumber, $u_title, $callingName, $complain_status); ////email
       

        if ($this->db->trans_status() === FALSE) {

            $this->db->trans_rollback();

            return 0;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }
   
   
   //send confirm mail
    public function sendEmail($receiver, $referenNumber, $u_title, $callingName, $complain_status) {
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
        $message .= "<h4>New status of your Complaint: &nbsp; " . $complain_status . "    <br> Your Reference Number: &nbsp; " . $ref_number . "    </h4>";


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
    
    
    
    
    
//    function update_complaint_status($data) {
//       // return $data;
//        $this->db->trans_begin();
//        $update_data = array(
//           
//            'c_edited_by_whom' => $this->session->userdata('u_id'),
//            'c_edited_date' => date("Y-m-d h:i:s"),
//            'c_status_category_id' => $data['complaint_status'],
//            'c_action_description' => $data['complain_details'],
//            'c_compnt_id' => $data['complain_id']
//        );
//        //$this->db->where('c_compnt_id', $data['complain_id']);
//        $result = $this->db->insert('cms_status_of_complaint', $update_data);
//        $st_id = $this->db->insert_id();
//        
//        
//        $update_status = array('c_gn_status_of_complaint'=>$data['complaint_status'],
//                                'c_gn_status_of_complaint_id'=>$st_id);
//        
//        $this->db->where('c_gn_complaint_id',$data['complain_id']);
//        $result = $this->db->update('cms_complaint_general', $update_status);
//
//       
//
//        if ($this->db->trans_status() === FALSE) {
//
//            $this->db->trans_rollback();
//
//            return 0;
//        } else {
//            $this->db->trans_commit();
//            return 1;
//        }
//    }
    
    
    
    
    
    
}
