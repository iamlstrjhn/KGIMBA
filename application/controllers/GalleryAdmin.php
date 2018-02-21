<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryAdmin extends CI_Controller {
	public function index () {
		
	
		$this->load->view('view_admin/header_admin');
		$this->load->view('view_admin/gallery_admin');
		$this->load->view('view_admin/footer_admin');
	}

	
}