<?php

/**
* 
*/
class Model_login extends CI_Model
{
 
 	public function login($username, $password) {

 		$this->db->where('UserName', $username);
 		$this->db->where('PassWord', hash("sha512",$password)); 

 		$result = $this->db->get('tbl_user');

 		if($result->num_rows() == 1) {
			return $result->result();
		}
		else{
			return false;
		}
 	}

}
