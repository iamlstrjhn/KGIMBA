<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
public function __construct() {
		parent::__construct();
		$this->load->model('Corporate_Model');
		$this->load->helper(array('form','url'));
	}

	public function index(){
		
		if ($this->session->userdata('session')) {
			$data['upload_data'] = $this->Corporate_Model->getcorporate();
			$this->load->view('view_admin/header_admin');
			$this->load->view('view_admin/corporate_admin', $data);
			$this->load->view('view_admin/footer_admin');
		}
	}
	public function upload(){
				$config['upload_path']          = 'application/uploads';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload');
				$this->upload->initialize($config);
                if (!$this->upload->do_upload('userfile'))
                {
                		$data['upload_data'] = $this->Corporate_Model->getcorporate();
                        $data['error'] = array('error' => $this->upload->display_errors());
                        $this->load->view('view_admin/header_admin');
						$this->load->view('view_admin/corporate_admin', $data);
						$this->load->view('view_admin/footer_admin');
                }
                else
                {
                        $data['error'] = array('upload_data' => $this->upload->data());

                        
                        
                        $this->load->view('view_admin/header_admin');
						$this->load->view('view_admin/corporate_admin', $data);
						$this->load->view('view_admin/footer_admin');
                
                }


	}
}