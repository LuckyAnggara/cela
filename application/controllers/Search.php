<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
    }

	public function index()
	{

		$id = 1;
		$data = [
				'header' => 'My Profile',
				'title' => '	',
				'miniTitle' => 'HD',
				'activeStatus' => 'active',
				]; 
				
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();

		$keyword = $this->input->post('nip');

		$this->form_validation->set_rules('nip','Nip','required');
 
		if($this->form_validation->run() != false){

		$this->_search();
		
		
		}else{
		$this->load->view('templates/header',$data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('search/index',$data);
		$this->load->view('templates/footer');
		}


        
        
        		
	}



	
	private function _search(){

	$id = 1;
	$data = [
			'header' => 'My Profile',
			'title' => '	',
			'miniTitle' => 'HD',
			'activeStatus' => 'active',
			];
				
	$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();

	$keyword = $this->input->post('nip');
	$dataPeg = $this->searchPegawai->get_pegawai_keyword($keyword);
	$nip = $dataPeg['nip'];

	$data['hukdisNip'] = $this->dataHukdis->get_data_by_nip($nip);
	
	if($dataPeg){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('search/daftar',$data);
		$this->load->view('templates/footer');
	// $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">DATA YANG KAMU CARI BERNAMA INDRY '.$data['name'].'</div>');
 //    redirect('search');
	}else{
	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">DATA TIDAK ADA ANJI!!!</div>');
    redirect('search');
	}

	}


	

}