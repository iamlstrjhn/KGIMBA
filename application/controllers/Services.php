
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	public function view($page = 'home'){
		if(!file_exists(APPPATH. 'views/pages/' .$page. '.php')){
			show_404();
		}

		$data ['title'] = ucfirst($page);
	}


	public function index () {
		$this->load->view('view_user/header');
		$this->load->view('view_user/service');
		$this->load->view('view_user/footer');

	}
}