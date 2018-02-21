<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminManagement extends CI_Controller {
	public function index () {
		if ($this->session->userdata('session')) {
			# code...
		
		$this->load->view('view_admin/header_admin');
		$this->load->view('view_admin/sample_admin');
		$this->load->view('view_admin/footer_admin');
	}
	else
	{
		redirect('Loginform');
	}
		
	}


	public function view($page = 'home'){

		$data ['title'] = ucfirst($page);
	}


	
}

?>