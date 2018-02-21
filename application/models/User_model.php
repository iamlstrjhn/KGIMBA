<?php

class User_model extends Ci_Model {

	public function __construct()
	{
		$this->load->database();
	}


	public function get_email {
		$this->db->select('tbl_email');
	}	
}