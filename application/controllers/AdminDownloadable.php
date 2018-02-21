<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDownloadable extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Downloadable_Model');
		$this->load->helper(array ('form', 'url'));
	}



	public function index () {
		if ($this->session->userdata('session')) {
		$data['upload_data'] = $this->Downloadable_Model->get_downloadable();
		$data['data_upload'] = $this->Downloadable_Model->get_financial();
		$this->load->view('view_admin/header_admin');
		$this->load->view('view_admin/downloadables_admin', $data);
		$this->load->view('view_admin/footer_admin');
	}
		else
		 {
		 	redirect('Loginform');
		}
		
	}


	public function upload (){
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run()===FALSE) {
			$this->load->view('view_admin/header_admin');
			$this->load->view('view_admin/downloadables_admin', $data);
			$this->load->view('view_admin/footer_admin');
		}

		else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] =  'docx|xslx|pdf|jpg|png';
			$config['max_size'] = 0;

			$this->load->library('upload');
            $this->upload->initialize($config);

			if (! $this->upload->do_upload()) {
				$error = array ('error' => $this->upload->display_errors());
			}

			else {
				$data = array('upload_data' => $this->upload->data());
				$File = $_FILES['userfile']['name'];
				$this->Downloadable_Model->create_downloadable($File);
				redirect('AdminDownloadable');
			}
		}
		
	}


	public function delete_upload ($id) {
			$this->load->model('Downloadable_Model');
			$ID = array('ID' => $id); 
			$this->Downloadable_Model->delete_uploads($id);
			redirect ('AdminDownloadable');
			
		}



		public function upload_financial (){
		$this->form_validation->set_rules('statusfinancial', 'Statusfinancial', 'required');
		if ($this->form_validation->run()===FALSE) {
			$this->load->view('view_admin/header_admin');
			$this->load->view('view_admin/downloadables_admin', $data);
			$this->load->view('view_admin/footer_admin');
		}

		else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] =  'docx|xslx|pdf|jpg|png';
			$config['max_size'] = 0;

			$this->load->library('upload');
            $this->upload->initialize($config);

			if (! $this->upload->do_upload()) {
				$error = array ('error' => $this->upload->display_errors());
			}

			else {
				$data = array('data_upload' => $this->upload->data());
				$Filefinancial = $_FILES['userfile']['name'];
				$this->Downloadable_Model->create_financial($Filefinancial);
				redirect('AdminDownloadable');
			}
		}
		
	}

	public function delete_upload_financial ($id) {
			$this->load->model('Downloadable_Model');
			$ID = array('ID' => $id); 
			$this->Downloadable_Model->delete_uploads_financial($id);
			redirect ('AdminDownloadable');
			
		}






	
}

?>