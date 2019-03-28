<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hukdis extends CI_Controller {
	
	public function daftar()
	{
		$id = 1;
		$data = [
				'header' => 'Daftar Hukdis',
				'title' => '',
				'miniTitle' => 'HD',
				'activeStatus' => 'active',
				]; 
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();
		$data['hukdis'] = $this->dataHukdis->get_data_hukdis();


		$this->load->view('templates/header',$data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('hukdis/daftar', $data);
		$this->load->view('templates/footer');
	}
}