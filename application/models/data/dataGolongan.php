<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class DataGolongan extends CI_Model{

		public function get_all(){
			return $this->db->get('golongan')->result_array();
		}

		public function get_data_golongan(){
			return $this->db->get(null)->result_array();
		}

	}