<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Report_model', 'ro');


        //$this->load->library('zip');
        // $this->load->library('tcpdf/tcpdf');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
//    public function index() {
//        // $data['result_array']       = $this->mo->get_all_complaints(); // intial load from data controller to view
//        $data = '';
//
//        $this->load->view('includes/header');
//        $this->load->view('includes/nav_bar');
//        $this->load->view('Report_offence', $data);
//        $this->load->view('includes/footer');
//    }

    function report_offences() {


        $data['main_content'] = 'reports/report_offence';
        $data['title'] = 'Summary report-Offence';

        $this->load->view('includes/template', $data);
    }
    
    function report_offencesByMe() {


        $data['main_content'] = 'reports/report_offence_by_me';
        $data['title'] = 'Offence details added by me';

        $this->load->view('includes/template', $data);
    }

    function load_district() {

        echo json_encode($this->ro->load_districts());
    }
    
    
    function load_division(){
        echo json_encode($this->ro->load_divisions());
    }

    
    function offence_report_pdf() {

        //     echo json_encode($this->Report_model->load_outsamount_report());
        $s_date = $this->input->post('sdate');
        $e_date = $this->input->post('edate');
        //$province = $this->input->post('province_id');
        $ps = $this->input->post('ps');

        $data['sdate'] = $s_date;
        $data['edate'] = $e_date;
        //$data['province'] = $this->ro->load_provience();
        $data['ps'] = $this->ro->load_ps();
        $data['offence_array'] = $this->ro->load_offence_report();

        $this->load->view('reports/offence_view_pdf', $data);
    }
    
    
    function offence_by_me_report_pdf() {

        //     echo json_encode($this->Report_model->load_outsamount_report());
        $s_date = $this->input->post('sdate');
        $e_date = $this->input->post('edate');
        //$province = $this->input->post('province_id');
        $ps = $this->input->post('ps');

        $data['sdate'] = $s_date;
        $data['edate'] = $e_date;
        
        $data['u_ID'] = $this->ro->load_officer();
        $data['offence_array'] = $this->ro->load_offence_by_me_report();
        

        $this->load->view('reports/offence_by_me_view_pdf', $data);
    }
    

    function all_complaints() {


        $this->load->view('manage_offence', $data);
    }

}
