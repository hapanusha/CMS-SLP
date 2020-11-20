
<?php

class Dashboard_model extends CI_Model {

    function get_all_complaints() {
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');


        $this->db->select('*');
        $this->db->join('cms_complaint_type', 'cms_complaint_type.id = cms_complaint_general.c_gn_complaint_type');

        $this->db->join('cms_police_station', 'cms_police_station.ps_police_station_id = cms_complaint_general.c_gn_toWhichPS');
        $this->db->join('cms_status_category_of_complaint cscc', 'cscc.sc_id=cms_complaint_general.c_gn_status_of_complaint');

        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where('cms_complaint_general.c_gn_toWhichPS', $police_station);
        }
        // $this->db->where('cms_complaint_general.c_gn_toWhichPS', $_SESSION['po_station']);//policestationwise dashboard data filtering
        $result_array = $this->db->get('cms_complaint_general')->result_array();
        return $result_array;
    }

    function get_data_dashboard_pie_chart() {
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');

        // print_r($this->session->userdata());

        $this->db->select('count(c_gn_status_of_complaint) AS pie_count');
        $this->db->join('cms_status_category_of_complaint', 'cms_status_category_of_complaint.sc_id = cms_complaint_general.c_gn_status_of_complaint');
        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where("cms_complaint_general.c_gn_toWhichPS", $police_station);
        }

        $this->db->group_by('c_gn_status_of_complaint');

        $result_array = $this->db->get('cms_complaint_general')->result_array();
        return $result_array;
    }

    function get_complaint_types() {
        $this->db->select('*');

        $result_array = $this->db->get('cms_complaint_type')->result_array();
        return $result_array;
    }
    
    function get_all_complain($data){
        $this->db->select('count(c_gn_complaint_id) as complint_this_month');
        $this->db->where("cms_complaint_general.c_gn_complaint_type", $data);

        $result_array = $this->db->get('cms_complaint_general')->result_array();
        return $result_array[0]['complint_this_month'];
    }

    function get_complain_this_month($data) {
        // print_r($data);
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');

        $this_month = date('Y-m-d');
        
        $start_date = date("Y-m-01", strtotime($this_month));      
        $end_date = date("Y-m-t", strtotime($this_month));
        
        $this_month = '';
        $this->db->select('count(c_gn_complaint_id) as complint_this_month');
        $this->db->where("cms_complaint_general.c_gn_c_date >=", $start_date);
        $this->db->where("cms_complaint_general.c_gn_c_date <=", $end_date);
        $this->db->where("cms_complaint_general.c_gn_complaint_type", $data);

        $result_array = $this->db->get('cms_complaint_general')->result_array();
        return $result_array[0]['complint_this_month'];
    }

    function get_complain_last_month($data) {
        // print_r($data);
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m');
        
        $last_month = date('Y-m-d', strtotime('last month'));
        
        $start_date = date("Y-m-01", strtotime($last_month));      
        $end_date = date("Y-m-t", strtotime($last_month));
        
        
        $last_month = '';
        $this->db->select('count(c_gn_complaint_id) as complint_this_month');
        $this->db->where("cms_complaint_general.c_gn_c_date >=", $start_date);
        $this->db->where("cms_complaint_general.c_gn_c_date <=", $end_date);
        
        $this->db->where("cms_complaint_general.c_gn_complaint_type", $data);

        $result_array = $this->db->get('cms_complaint_general')->result_array();
        return $result_array[0]['complint_this_month'];
    }
    
    
    
    function get_complain_type_dashboard_chart() {
        $this->db->select('count(c_gn_complaint_type) AS com_type_count');
        $this->db->join('cms_complaint_type', 'cms_complaint_type.id = cms_complaint_general.c_gn_complaint_type');
        $this->db->group_by('c_gn_complaint_type');

        $result_array = $this->db->get('cms_complaint_general')->result_array();
        return $result_array;
    }

    function get_Anonymous_complaints_details() {

        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');

        $this->db->select('*');
        $this->db->join('cms_police_station', 'cms_police_station.ps_police_station_id = cms_complaint_anonymous.c_an_toWhchPS');
        $this->db->join('cms_complaint_type', 'cms_complaint_type.id = cms_complaint_anonymous.c_an_complaint_type');
        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where("`cms_police_station`.`ps_police_station_id`", $police_station);
        }

        $result_anonymous = $this->db->get('cms_complaint_anonymous')->result_array();
        return $result_anonymous;
    }

    function get_Anonymous_complaints() {
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');
        
        $this->db->select('count(*) as anoy');
        
        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where('cms_complaint_anonymous.c_an_toWhchPS', $police_station);
        }
        $result_anonymous = $this->db->get('cms_complaint_anonymous')->result_array();
        return $result_anonymous;
    }

    function get_citizen_complaints() {
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');
        

        $this->db->select('count(*) as city');
        $this->db->where("cms_complaint_general.c_gn_complaint_user_type", 'Via online App');
        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where('cms_complaint_general.c_gn_toWhichPS', $police_station);
        }

        $result_city = $this->db->get('cms_complaint_general')->result_array();
        return $result_city;
    }

    function get_police_complaints() {
        
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');

        $this->db->select('count(*) as police');
        $this->db->where("cms_complaint_general.c_gn_complaint_user_type", 'via police station');
        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where('cms_complaint_general.c_gn_toWhichPS', $police_station);
        }
        $result_police = $this->db->get('cms_complaint_general')->result_array();

        //var_dump($result_police);
        return $result_police;
    }
    
    //
    function get_todays_citizen_complaints() {
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');

        $this->db->select('count(*) as city');
        $this->db->where("cms_complaint_general.c_gn_complaint_user_type", 'by citizen');
        $this->db->where("cms_complaint_general.c_gn_c_date", $curr_date);
        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where('cms_complaint_general.c_gn_toWhichPS', $police_station);
        }

        $result_city = $this->db->get('cms_complaint_general')->result_array();
        return $result_city;
    }
    function get_todays_police_complaints() {
        
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');
        
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');
        
        $this->db->select('count(*) as police');
        $this->db->where("cms_complaint_general.c_gn_complaint_user_type", 'via police station');
        $this->db->where("cms_complaint_general.c_gn_c_date", $curr_date);
        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where('cms_complaint_general.c_gn_toWhichPS', $police_station);
        }
        $result_police = $this->db->get('cms_complaint_general')->result_array();

        //var_dump($result_police);
        return $result_police;
    }

    function get_today_complaints() {
        
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');
        
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');
        $this->db->select('count(*) as today_complaints');
        $this->db->where("cms_complaint_general.c_gn_c_date", $curr_date);
        
        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where('cms_complaint_general.c_gn_toWhichPS', $police_station);
        }
        $this->db->from('cms_complaint_general');

        $result_today = $this->db->get()->result_array();
        return $result_today;
    }

    function get_today_complaints_any() {
        
        $user_roal = $this->session->userdata('u_group');
        $police_station = $this->session->userdata('po_station');
        
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');
        $this->db->select('count(*) as today_complaints');
        $this->db->where("cms_complaint_anonymous.c_an_placement_date", $curr_date);
        //
        if ($user_roal != ROLE_SUPER_USER) {
            $this->db->where('cms_complaint_anonymous.c_an_toWhchPS', $police_station);
        }
        
        
        $this->db->from('cms_complaint_anonymous');
        $result_today_any = $this->db->get()->result_array();
        return $result_today_any;
    }

}
