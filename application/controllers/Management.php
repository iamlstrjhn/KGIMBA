<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {
	public function view($page = 'home'){
		if(!file_exists(APPPATH. 'views/pages/' .$page. '.php')){
			show_404();
		}

		$data ['title'] = ucfirst($page);
	}


	public function index () {
		$this->load->view('view_user/header');
		$this->load->view('view_user/management');
		$this->load->view('view_user/footer');

	}
}