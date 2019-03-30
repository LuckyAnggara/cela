<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') !== 'allow') {
			redirect(base_url("login"));
		}
	}


	public function index()
	{
		$id = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
		$data = [
			'header' => 'Dashboard',
			'title' => '',
			'miniTitle' => '',
			'activeStatus' => 'active',
		];
		$data['dbase'] = $this->db->get_where('user', ['id' => $id['id']])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer');
	}
}
