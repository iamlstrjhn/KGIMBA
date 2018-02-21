<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Loginform extends CI_Controller
{

	public function index() {
		if($this->session->userdata('session')){
			redirect('Adminuser');
		} 
		else 
		{
		$this->load->view('view_user/header');
		$this->load->view('view_user/login-reg');
		$this->load->view('view_user/footer');
		}
	}


	public function login() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->Model_login->login($username, $password);

		if($result) {
			
			foreach($result as $row) {
				$user_data = array(
				'Username' => $row->$username
				);

				$this->session->set_userdata('session',$user_data);
				redirect('Adminuser');
			}
		}
		else {
			$this->session->set_flashdata('login_failed', 'Login invalid');
			redirect('Loginform');
		}
	}
	

	public function logout()
	 {
	   $this->session->unset_userdata('session');
	   session_destroy();
	   redirect('Loginform');
	 }
}