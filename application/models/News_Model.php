<?php 
	class News_Model extends CI_Model {

		
		public function __construct() {
			$this->load->database();
		}

		public function get_posts($slug = FALSE) {
			if ($slug === FALSE){
				$this->db->order_by('id','DESC');
				$query = $this->db->get('tbl_news');
			return $query->result_array();
			}

			$query = $this->db->get_where('tbl_news', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content')
				);

			return $this->db->insert('tbl_news', $data);
		}

		public function delete_post($id){
			$this->db->where('ID', $id);
			$this->db->delete('tbl_news');
			return true;

		}

		public function update_post() {
			$slug = url_title($this->input->post('title'));
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content')
				);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('tbl_news', $data);
		}

	}