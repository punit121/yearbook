<?php
/**
* created by punit
*/
class Membership_model extends CI_Model
{
	
	function validate()
	{
		# code...
		$this->db->where('email1',this->input->post('email1'));
		$this->db->where('pwd',this->input->post('pwd'));
		$query=$this->db->get('users');
		
		if($query->num_rows()==1)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	function create_member()
	{
		$new_member_insert_data=array(
			'roll'=> $this->input->post('roll'),
			'dep' => $this->input->post('dep'),
			'dob' => $this->input->post('dob'),
			'pref'=> $this->input->post('pref'),
			'pass'=> $this->input->post('pass')




			);
		$insert=$this->db->insert('users',$new_member_insert_data);
		return $insert;

	}

}

?>