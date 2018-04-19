<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCorporate extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Corporate_Model');
		$this->load->helper(array('form','url'));
	}

	public function index () {
		if ($this->session->userdata('session')) {
		$data['upload_data'] = $this->Corporate_Model->getcorporate();
		$data['data_upload'] = $this->Corporate_Model->getcorpasean();
		$this->load->view('view_admin/header_admin');
		$this->load->view('view_admin/corporate_admin', $data);
		$this->load->view('view_admin/footer_admin');
		}

		else 
		{
			redirect('Loginform');
		}
		
	}

	public function upload(){

			$this->form_validation->set_rules('status', 'Status', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('view_admin/header_admin');
				$this->load->view('view_admin/corporate_admin',$data);
				$this->load->view('view_admin/footer_admin');

			} 
			else{

				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'docx|xlsx|pdf|jpg|png';
                $config['max_size']             = 0;
                
                $this->load->library('upload');
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());
                     	
                }
                else

	                {
	                        $data = array('upload_data' => $this->upload->data());
	                        $File = $_FILES['userfile']['name'];
	                        $this->Corporate_Model->create_corporate($File);
							redirect('AdminCorporate');
	                }


			}

			
		}


		public function delete_upload ($id) {
			$this->load->model('Assets_Model');
			$ID = array('ID' => $id); 
			$this->Corporate_Model->delete_uploads($id);
			redirect ('AdminCorporate');
			
		}

		public function upload_corp(){

			$this->form_validation->set_rules('statuscorp', 'Statuscorp', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('view_admin/header_admin');
				$this->load->view('view_admin/corporate_admin',$data);
				$this->load->view('view_admin/footer_admin');

			} 
			else{

				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'docx|xlsx|pdf|jpg|png';
                $config['max_size']             = 0;
                
                $this->load->library('upload');
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());
                     	
                }
                else
                {
                        $data = array('data_upload' => $this->upload->data());
                        $Filecorp = $_FILES['userfile']['name'];
                        $this->Corporate_Model->create_corpasean($Filecorp);
						redirect('AdminCorporate');
                }


				
			}

			
		}

		public function delete_upload_corp ($id) {
			$this->load->model('Assets_Model');
			$ID = array('ID' => $id); 
			$this->Corporate_Model->delete_upload_corps($id);
			redirect ('AdminCorporate');
			
		}

	
}

?>