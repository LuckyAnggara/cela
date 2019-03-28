<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class SearchPegawai extends CI_Model{


		public function get_pegawai_keyword($keyword){
			$this->db->select('*');
			$this->db->from('hukdis');
			$this->db->where('nip',$keyword);
			return $this->db->get()->row_array();
		}
	}