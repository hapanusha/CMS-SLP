<?php

class System_front_view2all_cntrlr extends CI_controller {



function index() {
	$data['main_content'] = 'login_view.php';
	$data['title'] = 'LOGIN';
	$this->load->view('system_front_view2all',$data);
}

function loginSubmit()
{
    redirect('dashboards');
//	$result = $this->login_model->authenticateLogin();
//
//	if(!empty($result))
//	{				
//		redirect('dashboard');
//	}
//	else
//	{
//		redirect('login?login=invalid');
//	}
}

function logout()
{
	$this->session->userdata = array();
	$this->session->sess_destroy();
	redirect('login?login=logout');
}




}