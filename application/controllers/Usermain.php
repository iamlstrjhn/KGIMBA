<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermain extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('assets_model');
                $this->load->helper('url_helper', 'form_validation');
                $this->load->library('email');
        }

	public function index () {
		$this->load->model('Assets_Model');
		$data['assets'] = $this->Assets_Model->get_assets();
		$data['financials'] = $this->Assets_Model->get_financial();  
		$this->load->view('view_user/header');
		$this->load->view('view_user/body', $data);
		$this->load->view('view_user/footer');

	}


	public function send_email () {
		$to_email = "lesterjohnpulanco@gmail.com"; 
		$from_email = $this->input->post('email');
		$config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_port' => 465,
        'smtp_user' => "lesterjohnpulanco@gmail.com", 
        'smtp_pass' => "c0lumb@n2016",
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'wordwrap'  => true,
        'wrapchars' => 50            
    	);

		$this->load->library('email', $config);
    	$this->email->set_newline("\r\n");

		$this->email->from($from_email); 
		$this->email->to($to_email);
		$this->email->subject('subject'); 
		$this->email->message('message'); 
		$this->email->send();

         if($this->email->send())
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
        else
        $this->session->set_flashdata("email_sent","You have encountered an error");
        redirect('Usermain');

	}

	



}

?>