<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Police_Station_model extends CI_Model {

    function add_police_station() {

//        $ps_id            = $this->input->post('ps_id');
        $ps_name = $this->input->post('ps_name');
        $ps_province = $this->input->post('ps_province');
        $ps_district = $this->input->post('ps_district');
        $ps_division = $this->input->post('ps_division');
        $ps_address = $this->input->post('ps_address');
        $ps_officeContactNo = $this->input->post('ps_officeContactNumber');
        $ps_officeContactNoOthr = $this->input->post('ps_alternativeContactNumber');
        $ps_faxNumber = $this->input->post('ps_faxNumber');
        $ps_email = $this->input->post('ps_email');
        $ps_remarks = $this->input->post('ps_remarks');
        $ps_oic = $this->input->post('ps_oic');
        //$ps_division_id     = $this->input->post('ps_division_id');
//                $complaint['c_an_complaint_type'] = $ps_id;
//                $complaint['c_an_attachment'] = $ps_name;
//                $complaint['c_an_why_anonymous'] = $ps_officerInCharge;
//                $complaint['c_an_complaint_inbrief'] = $ps_address;
//                $complaint['c_an_placement_date'] = date('Y-m-d');
//
//          return  $this->db->insert('cms_complaint_anonymous',$complaint);

        $addPoliceStation['ps_name'] = $ps_name;
        $addPoliceStation['ps_province_id'] = $ps_province;
        $addPoliceStation['ps_district_id'] = $ps_district;
        $addPoliceStation['ps_division_id'] = $ps_division;

        //$addPoliceStation['ps_division_id'] = $ps_division_id;
        $addPoliceStation['ps_address'] = $ps_address;
        $addPoliceStation['ps_contact_number'] = $ps_officeContactNo;
        $addPoliceStation['ps_contact_number_other'] = $ps_officeContactNoOthr;
        $addPoliceStation['ps_fax'] = $ps_faxNumber;
        $addPoliceStation['ps_email'] = $ps_email;
        $addPoliceStation['ps_remarks'] = $ps_remarks;
        $addPoliceStation['ps_oic'] = $ps_oic;

//                $addPoliceStation['ps_province_id'] = $ps_province_id;




        return $this->db->insert('cms_police_station', $addPoliceStation);
    }

    function get_all_police_station() {
        $this->db->select('*');
        $this->db->from('cms_police_station');
        return $res = $this->db->get()->result_array();
    }

    function load_data() {
        $this->db->select('*, (select po_name_with_initials from cms_police_officer where cms_police_officer.po_id = cms_police_station.ps_oic )as po_name_with_initials');
        $this->db->join('cms_district', 'cms_district.id = cms_police_station.ps_district_id');
        
        //$this->db->join('cms_police_officer', 'cms_police_officer.po_id = cms_police_station.ps_oic');
        
        $this->db->from('cms_police_station');
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

    function get_division() {
        $this->db->select('*');
        $this->db->from('cms_division');
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

    function load_provience() {
        $id = $this->input->post('province_id');

        $this->db->select('*');
        $this->db->from('cms_province');
        $this->db->where('id', $id);
        return $result = $this->db->get()->result_array();
    }

    //------view functions-------
    function view_ps_details($police_station_id) {

        //$this->db->select('*');
        $this->db->select('*, (select po_officer_number from cms_police_officer where cms_police_officer.po_id = cms_police_station.ps_oic) as po_officer_number');
        
        $this->db->join('cms_province cp', 'cp.id = cms_police_station.ps_province_id');
        $this->db->join('cms_district cd', 'cd.id = cms_police_station.ps_district_id');
        $this->db->join('cms_division cdiv', 'cdiv.div_id = cms_police_station.ps_division_id');
       // $this->db->join('cms_police_officer cpo', 'cpo.po_id = cms_police_station.ps_oic');
        
        
       // $this->db->join('cms_status_category_of_complaint cscc', 'cscc.sc_id = cms_complaint_general.c_gn_status_of_complaint');
        
        $this->db->where('cms_police_station.ps_police_station_id', $police_station_id['ps_police_station_id']);
        $police_station_details = $this->db->get('cms_police_station')->row_array();


        return $police_station_details;
    }

    function update_policeStations($data) {
        // return $data;
        $this->db->trans_begin();
        
      $data['ps_oic'];
      
        $this->db->select('po_id');
        $this->db->from('cms_police_officer');
        $this->db->where('po_officer_number', $data['ps_oic']);
        $result = $this->db->get()->result_array();
        $result[0]['po_id'];
      
        
        $update_data = array(
            'ps_edited_by_off_id' => $this->session->userdata('u_id'),
            'ps_address' => $data['ps_address'],
            'ps_contact_number' => $data['ps_contact_number'],
            'ps_contact_number_other' => $data['ps_contact_number_other'],
            'ps_fax' => $data['ps_fax'],
            'ps_remarks' => $data['ps_remarks'],
            'ps_oic' => $result[0]['po_id'],
        );
        //$this->db->where('c_compnt_id', $data['complain_id']);
       // $result = $this->db->insert('cms_status_of_complaint', $update_data);
       // $st_id = $this->db->insert_id();


       // $update_status = array('c_gn_status_of_complaint' => $data['complaint_status'], 'c_gn_status_of_complaint_id' => $st_id);

        $this->db->where('ps_police_station_id', $data['ps_police_station_id']);
        
        $result = $this->db->update('cms_police_station', $update_data);



        if ($this->db->trans_status() === FALSE) {

            $this->db->trans_rollback();

            return 0;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }

}
