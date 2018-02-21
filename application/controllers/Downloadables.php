<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downloadables extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Downloadable_Model');
		$this->load->helper(array ('form', 'url'));
	}


	public function index () {
		$data['upload_data'] = $this->Downloadable_Model->get_downloadable();
		$data['data_upload'] = $this->Downloadable_Model->get_financial();
		$this->load->view('view_user/header');
		$this->load->view('view_user/downloadables', $data);
		$this->load->view('view_user/footer');

	}


	


	
}