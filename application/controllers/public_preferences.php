<?php

class Public_preferences extends CI_controller {



function index() {
	$data['main_content'] = 'login_view.php';
	$data['title'] = 'LOGIN';
	$this->load->view('public_preference',$data);
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