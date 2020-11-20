<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Anusha_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    
       function get_title() {

            $this->db->select('*');
            $this->db->where('title_status', '1');
            $title_new = $this->db->get('cms_title')->result_array();

            return $title_new;
        }
        
//        function save_data(){
//            $this->db->insert();
//        }
   
    }