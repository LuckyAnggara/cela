<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class GetPelanggaran extends CI_Model{

	function __construct(){
		parent ::__construct();
	}


	function getDataPelanggaran()
	{
		$this->db->select('*');
		$this->db->from('pelanggaran');
		return $this->db->get()->result_array();
	}

}