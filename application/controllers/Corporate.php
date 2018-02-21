<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Corporate_Model');
		$this->load->helper(array('form','url'));
	}

	public function index () {
		$data['upload_data'] = $this->Corporate_Model->getcorporate();
		$data['data_upload'] = $this->Corporate_Model->getcorpasean();
		$this->load->view('view_user/header');
		$this->load->view('view_user/corporate', $data);
		$this->load->view('view_user/footer');

	}


	
	


	
}