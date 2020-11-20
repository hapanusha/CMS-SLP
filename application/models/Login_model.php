<?php 
class Login_model extends CI_Model {

function authenticateLogin() 
{
	$name = $this->input->post('userName');
	$pass = $this->input->post('password');
        //$pass = md5($this->input->post('password'));


	$this->db->select('*');
	$this->db->join('cms_usergroup','cms_usergroup.user_group_id = cms_user.user_group');
        $this->db->join('cms_police_officer','cms_police_officer.po_id = cms_user.user_employee');
	$this->db->where("cms_user.user_name",$name);
	$this->db->where("cms_user.user_password", md5($pass));
        //$this->db->where("cms_user.user_password",$pass);
	$this->db->where("cms_user.user_status",'1');

	$result = $this->db->get("cms_user")->row_array();

	

	return $result;
}

//function get_branchdetails($branch)
//{
//    $this->db->where('br_id',$branch);
//    $branch = $this->db->get('hgc_branch')->row_array();
//}

}
