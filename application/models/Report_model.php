<?php

class Report_model extends CI_Model {

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

    function load_ps() {
        $id = $this->input->post('ps');

        $this->db->select('*');
        $this->db->from('cms_police_station');
        $this->db->where('ps_police_station_id', $id);
        return $result = $this->db->get()->result_array();
    }

    function load_officer() {
        $id = $this->input->post('userLogID');

        $this->db->select('*');
        $this->db->from('cms_police_officer');
        $this->db->where('po_id', $id);
        return $result = $this->db->get()->result_array();
    }

    function get_status_details() {
        $this->db->select('*');
        $this->db->join('cms_status_category_of_complaint', 'cms_status_category_of_complaint.sc_id = cms_complaint_general.c_gn_status_of_complaint_id');
        $this->db->join('cms_complaint_type', 'cms_complaint_type.id = cms_complaint_anonymous.c_an_complaint_type');


        $result_anonymous = $this->db->get('cms_complaint_anonymous')->result_array();
        return $result_anonymous;
    }

//    function load_offence_report() {
//
//        //$s_date = $this->input->post('sdate');
//        // $e_date = $this->input->post('edate');
//        $province_id = $this->input->post('province_id');
//        $district_id = $this->input->post('district_name');
//        //$batch_id = $this->input->post('batch_name');
//
//        $date_now = date('Y-m-d');
//        $this->db->select('*');
//        $this->db->from('cms_complaint_general as cg');
//        // $this->db->where('cg.c_gn_provinceOfCmplngPS', $province_id);
//        //$this->db->join('cms_province as cpro', 'cpro.id='.$province_id);
////        $this->db->join('hc_feecategory as hf', 'hf.feecat_id=hic.inv_type');
////        $this->db->join('hc_student_reg as hsr', 'hsr.stu_id=hi.student_id');
//        if ($province_id != '-1') {
//            $this->db->where('cg.c_gn_provinceOfCmplngPS', $province_id);
//        }
//        if ($district_id != '-1') {
//            $this->db->where('cg.c_gn_districtOfCmplngPS', $district_id);
//        }
////        if ($degre_id != '' && $batch_id != '') {
////            $this->db->where('hsr.batch_id', $batch_id);
////        }
//        //$this->db->where('hic.due_date >=', $s_date);
//        // $this->db->where('hic.due_date <=', $e_date);
//        $this->db->order_by("cg.c_gn_complaint_id", "asc");
//        $result = $this->db->get()->result_array();
//
//        return $result;
//    }


    function load_offence_report() {

        $s_date = $this->input->post('sdate');
        $e_date = $this->input->post('edate');
        //$province_id = $this->input->post('province_id');
        //$district_id = $this->input->post('district_name');
        $ps = $this->input->post('ps');
        //$batch_id = $this->input->post('batch_name');

        $date_now = date('Y-m-d');
        //$this->db->select('*, (select complaint_category from cms_complaint_type where id=c_gn_complaint_type) AS complaint_category');
        $this->db->select('*, (select complaint_category from cms_complaint_type where id=c_gn_complaint_type) AS complaint_category, (select sc_description from cms_status_category_of_complaint where sc_id=c_gn_status_of_complaint) AS complaint_status');
        $this->db->from('cms_complaint_general as cg');

        if ($s_date && $e_date) {
            $this->db->where('cg.c_gn_c_date >=', $s_date);
            $this->db->where('cg.c_gn_c_date <=', $e_date);
        }
        //$this->db->join('cms_province as cpro', 'cpro.id='.$province_id);
//        $this->db->join('hc_feecategory as hf', 'hf.feecat_id=hic.inv_type');
//        $this->db->join('hc_student_reg as hsr', 'hsr.stu_id=hi.student_id');
        if ($ps != -1) {
            $this->db->where('cg.c_gn_toWhichPS', $ps);
        }


        $this->db->order_by("cg.c_gn_complaint_id", "asc");
        $result = $this->db->get()->result_array();

        return $result;
    }

    function load_offence_by_me_report() {

        $s_date = $this->input->post('sdate');
        $e_date = $this->input->post('edate');
        //$province_id = $this->input->post('province_id');
        //$district_id = $this->input->post('district_name');
        $u_ID = $this->input->post('userLogID');
        //$batch_id = $this->input->post('batch_name');

        $date_now = date('Y-m-d');
      //  $this->db->select('*, (select complaint_category from cms_complaint_type where id=c_gn_complaint_type) AS complaint_category');
        
        $this->db->select('*, (select complaint_category from cms_complaint_type where id=c_gn_complaint_type) AS complaint_category, (select sc_description from cms_status_category_of_complaint where sc_id=c_gn_status_of_complaint) AS complaint_status');
        $this->db->from('cms_complaint_general as cg');
        // $this->db->where('cg.c_gn_provinceOfCmplngPS', $province_id);
        //$this->db->join('cms_province as cpro', 'cpro.id='.$province_id);
//        $this->db->join('hc_feecategory as hf', 'hf.feecat_id=hic.inv_type');
//        $this->db->join('hc_student_reg as hsr', 'hsr.stu_id=hi.student_id');
        if ($u_ID != '-1') {
            $this->db->where('cg.c_gn_c_loginUserID', $u_ID);
        }
        if ($s_date && $e_date) {
            $this->db->where('cg.c_gn_c_date >=', $s_date);
            $this->db->where('cg.c_gn_c_date <=', $e_date);
        }
        //if ($district_id != '-1') {
        // $this->db->where('cg.c_gn_districtOfCmplngPS', $district_id);
        //}
//        if ($degre_id != '' && $batch_id != '') {
//            $this->db->where('hsr.batch_id', $batch_id);
//        }
        //$this->db->where('hic.due_date >=', $s_date);
        // $this->db->where('hic.due_date <=', $e_date);
        $this->db->order_by("cg.c_gn_complaint_id", "asc");
        $result = $this->db->get()->result_array();

        return $result;
    }

}
