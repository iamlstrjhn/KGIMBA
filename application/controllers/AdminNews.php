<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminNews extends CI_Controller {
		
		
		public function index (){

			if ($this->session->userdata('session')) {
				# code...
			
			$data['title'] = 'KGI MBA News Update';

			$data['tbl_news'] = $this->News_Model->get_posts();
			

			$this->load->view('view_admin/header_admin');
			$this->load->view('view_admin/news_admin', $data);
			$this->load->view('view_admin/footer_admin');
		}
		else 
		{
			redirect('Loginform');
		}
		}

		public function view ($slug = NULL) {
			$data['post'] = $this->News_Model->get_posts($slug);

			
			$data['title'] = $data['post']['Title'];
			$this->load->view('view_admin/header_admin');
			$this->load->view('view_admin/article_admin', $data);
			$this->load->view('view_admin/footer_admin');
		}

		public function create_admin(){
			$data['title'] = 'Create News Here';

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'Content', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('view_admin/header_admin');
				$this->load->view('view_admin/create_admin', $data);
				$this->load->view('view_admin/footer_admin');

			} 
			else{
				$this->News_Model->create_post();
				redirect('AdminNews');
			}

			
		}

		public function delete($id){
			$this->News_Model->delete_post($id);
			redirect('AdminNews');
		}

		public function edit ($slug) {
			$data['post'] = $this->News_Model->get_posts($slug);	

			$data['title'] = 'Edit News';
			$this->load->view('view_admin/header_admin');
			$this->load->view('view_admin/edit_news', $data);
			$this->load->view('view_admin/footer_admin');

		}

		public function update () {
			$this->News_Model->update_post();
			redirect('AdminNews', $data);
		}

	}
?>