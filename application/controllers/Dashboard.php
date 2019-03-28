<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$id = 1;
		$data = [
				'header' => 'Dashboard',
				'title' => '',
				'miniTitle' => '',
				'activeStatus' => 'active',
				]; 
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();




		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard/index',$data);
		$this->load->view('templates/footer');
	}

}