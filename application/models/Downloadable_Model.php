<?php


class Downloadable_Model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function get_downloadable (){
		return $this->db->get ('tbl_downloadable_forms')->result();
	}

	function get_financial (){
		return $this->db->get ('tbl_financial_statements')->result();
	}

	public function create_downloadable ($File){
		$data = array (
			'status' => $this->input->post('status'),
			'File' => $File
		);

			return $this->db->insert('tbl_downloadable_forms', $data);
	}


	public function delete_uploads($id){
			$this->db->where('ID', $id);
			$asset = $this->db->delete('tbl_downloadable_forms');
			return TRUE;

		}


		public function create_financial ($Filefinancial){
		$data = array (
			'statusfinancial' => $this->input->post('statusfinancial'),
			'Filefinancial' => $Filefinancial
		);

			return $this->db->insert('tbl_financial_statements', $data);
	}


	public function delete_uploads_financial($id){
			$this->db->where('ID', $id);
			$asset = $this->db->delete('tbl_financial_statements');
			return TRUE;

		}





}

?>


