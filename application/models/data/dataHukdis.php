<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class DataHukdis extends CI_Model{

		public function get_all(){
			return $this->db->get('hukdis')->result();
		}

		public function get_data_hukdis(){
			$this->db->select('hukdis.*,wilayah.nama_wilayah');
			$this->db->from('hukdis');
			$this->db->join('wilayah','wilayah.id = hukdis.kanwil_id');
			return $this->db->get(null)->result_array();
		}

		public function get_data_by_nip($nip){
			$this->db->select('hukdis.*,wilayah.nama_wilayah,jenis_hukuman.*');
			$this->db->from('hukdis');
			$this->db->join('wilayah','wilayah.id = hukdis.kanwil_id');
			$this->db->join('jenis_hukuman','jenis_hukuman.id = hukdis.hukuman_id');
			$this->db->where('nip',$nip);
			return $this->db->get(null)->result_array();
		}
	}