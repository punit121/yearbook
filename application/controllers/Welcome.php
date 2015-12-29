<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');

		
	}

	function create_member()
	{
		$this->load->model('membership_model');



		if($query=$this->membership_model->create_member())
		{
			$data['account_created'] = 'Your Account Has Been Created'.
			$this->load->view('welcome',$data);

		}

		else
		{

		}


	}	
	function validate_credentials()
	{
				$this->load->model('membership_model');
				$query=$this->membership_model->validate();

				if($query)
				{

					$data=array(
						'email1'=>$this->input->post('email1'),
						'is_logged_in'=>true
						);
					$this->session->set_userdata($data);
						//$this->load->view('member_area');
					redirect(member_area);
				}
				else
				{
					$this->index();
				}

	}

}
