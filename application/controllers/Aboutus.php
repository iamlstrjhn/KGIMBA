<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	


	public function index () {
		$this->load->view('view_user/header');
		$this->load->view('view_user/aboutus');
		$this->load->view('view_user/footer');

	}
}