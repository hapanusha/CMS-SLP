<?php

class Login extends CI_controller {

function login() {
	parent::__construct();
	$this->load->model('login_model');
        
}

function index() {
	

	$this->isLoggedIn();
}

function loginSubmit()
{
    //redirect('dashboards');
	$result = $this->login_model->authenticateLogin();
	   var_dump($result);
	   

	
	   
	   if(count($result) > 0)
	   {
		  // foreach ($result as $res)
		  // {
		//	var_dump($result['user_name']);
			//echo $result['user_name'];
			   $sessionArray = array('u_name'=>$result['user_name'],                    
									   'u_id'=>$result['user_id'],
									   'po_officcer'=>$result['po_calling_name'],
									   'po_number'=>$result['po_officer_number'],
									   'po_name_with_initials'=>$result['po_name_with_initials'],
									   'po_station'=>$result['po_police_station_id'],
									   'u_group'=>$result['user_group'],
									   'u_group_id'=>$result['user_group_id'],
									   'u_emp'=>$result['user_employee'],
									   'isLoggedIn' => TRUE
							   );
							   
			   $this->session->set_userdata($sessionArray);
			   
			   redirect('/dashboards');
		   //}
	   }
	   else
	   {
		   $this->session->set_flashdata('error', 'Email or password mismatch');
		   
		  // redirect('/login');
		   redirect('login?login=invalid');
	   }








/*
	if(!empty($result))
	{				
		redirect('dashboards');
	}
	else
	{
		//redirect('dashboards');
                redirect('login?login=invalid');
	}*/
}

function logout()
{
	$this->session->userdata = array();
	$this->session->sess_destroy();
	redirect('login?login=logout');
}

function isLoggedIn()
{
	$isLoggedIn = $this->session->userdata('isLoggedIn');
	
	if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
	{
		//$this->load->view('login');
		$data['main_content'] = 'login_view.php';
		$data['title'] = 'LOGIN';
		$this->load->view('login_view');
	}
	else
	{
		redirect('/dashboards');
	}
}

}