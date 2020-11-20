<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cms_settings_model extends CI_Model {
    
    
    function add_complaint_type(){
        
        $com_id              = $this->input->post('com_id');
        $com_type            = $this->input->post('com_type');
        $com_type_status     = $this->input->post('com_type_status');
       
        
                                                
        $addComType['id']                       = $com_id;
        $addComType['complaint_category']       = $com_type;
        $addComType['complaint_category_status'] = $com_type_status;
                                      
        
        return $this->db->insert('cms_complaint_type', $addComType);
    }
    
    
    function add_status(){
        
        $status_id              = $this->input->post('status_id');
        $status_description     = $this->input->post('status_description');
        $status_details         = $this->input->post('status_details');
        $status_Existence       = $this->input->post('status_Existence');
       
        
                                                
        $addStatus['sc_id']             = $status_id;
        $addStatus['sc_description']    = $status_description;
        $addStatus['sc_details']        = $status_details;
        $addStatus['sc_status']         = $status_Existence;
                                      
        
        return $this->db->insert('cms_status_category_of_complaint', $addStatus);
    }



    

//    function load_data() {
//        $this->db->select('*');
//        $this->db->join('cms_district', 'cms_district.id = cms_police_station.ps_district_id');
//        $this->db->from('cms_police_station');
//        return $res = $this->db->get()->result_array();
//    }
    
    
    function load_data_complaintTypes() {
        $this->db->select('*');
       
        $this->db->from('cms_complaint_type');
        return $res = $this->db->get()->result_array();
    }
    
    function load_data_status() {
        $this->db->select('*');
       
        $this->db->from('cms_status_category_of_complaint');
        return $res = $this->db->get()->result_array();
    }
    
    
    
    

//    function load_divisions() {
//
//        $id = $this->input->post('id');
//
//        $this->db->select('*');
//        $this->db->from('cms_division');
//        $this->db->where('div_disctrict_id', $id);
//        return $result = $this->db->get()->result_array();
//    }

   
     
     
     

}
