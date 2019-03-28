<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class GetWilayah extends CI_Model{

	function __construct(){
		parent ::__construct();
	}


	function getNamaWilayah()
	{
		$this->db->select('*');
		$this->db->from('wilayah');
		return $this->db->get()->result_array();
	}

	function getNamaSatker($input,$column)
	{
		$this->db->select('*');
		$this->db->limit('5');
		$this->db->from('satker');
		$this->db->where('wilayah_id',$input);
		return $this->db->get()->result_array();
		}


}