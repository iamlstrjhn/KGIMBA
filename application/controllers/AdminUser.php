<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUser extends CI_Controller {

	   public function __construct()
        {
                parent::__construct();
                $this->load->model('assets_model');
                $this->load->helper('url_helper');
        }

	public function index () {
		$this->load->model('Assets_Model');
		if($this->session->userdata('session')){
			$data['assets'] = $this->Assets_Model->get_assets();
			$data['financials'] = $this->Assets_Model->get_financial();  
		    $this->load->view('view_admin/header_admin');
		    $this->load->view('view_admin/body_admin', $data);
		    $this->load->view('view_admin/footer_admin');
		} 
		else 
		{
			redirect('Loginform');
		}
	}

	

	public function create_admin(){

			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('total', 'Total', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('view_admin/header_admin');
				$this->load->view('view_admin/body_admin', $data);
				$this->load->view('view_admin/footer_admin');

			} 
			else{
				$this->Assets_Model->create_assets();
				redirect('AdminUser');
			}

			
		}

		public function create_adminhighlight () {

			$this->form_validation->set_rules('description1', 'Description1', 'required');
			$this->form_validation->set_rules('total1', 'Total1', 'required');

			if($this->form_validation->run() === FALSE){
				
				$this->load->view('view_admin/header_admin');
				$this->load->view('view_admin/body_admin');
				$this->load->view('view_admin/footer_admin');

			} 
			else{
				$this->Assets_Model->create_highlights();
				redirect('AdminUser');
			}

		}

		public function delete_operation($id)
		{
			$this->load->model('Assets_Model');
			  $ID = array('ID' => $id); 
			  $this->Assets_Model->delete_highlights($id);
				redirect ('AdminUser');
			
			
		}

		public function delete_financial($id) {
			$this->load->model('Assets_Model');
			$ID = array('ID' => $id);
			$this->Assets_Model->delete_financials($id);
			redirect ('AdminUser');		

		}






		

}

?>