<?php

/**
* 
*/
class Corporate_Model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function getcorporate () {

		return $this->db->get('tbl_corporate')->result();
	}
	function getcorpasean () {

		return $this->db->get('tbl_corp_asean')->result();
	}


	public function create_corporate($File){

			$data = array(
				'status' => $this->input->post('status'),
				'File' => $File
			);

			return $this->db->insert('tbl_corporate', $data);	
		}

	public function delete_uploads($id){
			$this->db->where('ID', $id);
			$asset = $this->db->delete('tbl_corporate');
			return TRUE;

		}


			public function create_corpasean($Filecorp){

			$data = array(
				'statuscorp' => $this->input->post('statuscorp'),
				'Filecorp' => $Filecorp
			);

			return $this->db->insert('tbl_corp_asean', $data);	
		}


		public function delete_upload_corps($id){
			$this->db->where('ID', $id);
			$asset = $this->db->delete('tbl_corp_asean');
			return TRUE;

		}	


}