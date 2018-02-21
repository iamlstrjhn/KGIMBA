<?php

class Assets_Model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}


	public function get_assets() {
		return $this->db->get('tbl_assets')->result();
	}

	public function get_financial() {
		return $this->db->get('tbl_assets1')->result();
	}

	public function create_assets(){

			$data = array(
				'description' => $this->input->post('description'),
				'total' => $this->input->post('total')
				);

			return $this->db->insert('tbl_assets', $data);	
		}

		public function create_highlights(){

			$data = array(
				'Description1' => $this->input->post('description1'),
				'Total1' => $this->input->post('total1')
				);

			return $this->db->insert('tbl_assets1', $data);	
		}	

		public function delete_highlights($id){
			$this->db->where('ID', $id);
			$asset = $this->db->delete('tbl_assets');
			return TRUE;

		}	


		public function delete_financials($id){
			$this->db->where('ID', $id);
			$highlight = $this->db->delete('tbl_assets1');
			return TRUE;
		}


}