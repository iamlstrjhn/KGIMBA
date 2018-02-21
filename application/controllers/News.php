<?php


class News extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('News_Model');
	}

	public function index (){

	$data['tbl_news'] = $this->News_Model->get_posts();

	$this->load->view('view_user/header');
	$this->load->view('view_user/news', $data);
	$this->load->view('view_user/footer');
			


	}

}