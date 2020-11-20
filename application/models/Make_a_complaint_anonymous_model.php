<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Make_a_complaint_anonymous_model extends CI_Model {

    function save_complaint() {

        $distric    = $this->input->post('distric');
        $p_station  = $this->input->post('p_station');
        $toWhichStation  = $this->input->post('toWhichStation'); 
        $location   = $this->input->post('location');
        $com_type   = $this->input->post('type');
        $com_brief  = $this->input->post('com_brief');
        $attachment = $this->input->post('attachment');
        $rsn_for_being_anonymous = $this->input->post('rsn_for_being_anonymous');
        $asYouUserType = $this->input->post('asYouUserType');


        $complaint['c_an_district'] = $distric;
        $complaint['c_an_police_station'] = $p_station;
        $complaint['c_an_toWhchPS'] = $toWhichStation;
        $complaint['c_an_location'] = $location;
        $complaint['c_an_complaint_type'] = $com_type;
        $complaint['c_an_complaint_inbrief'] = $com_brief;
        $complaint['c_an_attachment'] = $attachment;
        $complaint['c_an_why_anonymous'] = $rsn_for_being_anonymous;
        $complaint['c_an_placement_date'] = date('Y-m-d');
        $complaint['c_gn_complaint_user_type'] = $asYouUserType;


//                if(!empty($_FILES['attachment']['name']))
//                {
//                    $name_img=$_FILES['attachment']['name'];
//                    $temp_info=explode('.',$name_img);
//                    $ary_len=count($temp_info);
//                    
//                    $config['upload_path']='./uploads/evidence';
//                    $config['allowed_type']='.jpeg|.png|.jpg}.mp3|.mp4|.pdf';
//                    $config['max_size']='200000';
//                    $config['overwrite']='TRUE';
//                   
//                    $this->load->library('upload', $config);
//                    
//                    if(! $this->upload->do_upload('attachment'))
//                    {
//                        
//                        
//                        $error=array('error'=> $this->upload->display_errors());
//                        &img_save_data=null;
//                    }
//                    else
//                    {
//                        $image_data=$this->upload->data();
//                        $img_save_data='uploads/evidence/'.$image_data['file_name']
//                     
//                    }
//                    
//                    
//                    
//                }
//                else
//                {
//                    
//                    $img_save_data=null;
//                    
//                }
//
        return $this->db->insert('cms_complaint_anonymous', $complaint);
    }

    function load_data() {
        $this->db->select('*');
        $this->db->from('cms_complaint_anonymous');
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
    function get_complaint_types() {
        $this->db->select('*');
        $this->db->from('cms_complaint_type');
        return $res = $this->db->get()->result_array();
    }

}
