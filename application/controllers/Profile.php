<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	
	public function edit_profile()
	{
		$id = 1;
		$data = [
				'header' => 'My Profile',
				'title' => '',
				'miniTitle' => 'HD',
				'activeStatus' => 'active',
				]; 
				
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('profile/edit_profile',$data);
		$this->load->view('templates/footer');
	}
	public function detail_profile_hukdis($no_ticket)
	{
		$id = 1;
		$data = [
				'header' => 'Detail',
				'title' => 'HUKDIS',
				'miniTitle' => 'HD',
				'activeStatus' => 'active',
				]; 
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();
		// $dataHukdis['hukdis'] = $this->db->get_where('hukdis',['nip' => $nip])->row_array();

		$this->db->select('hukdis.*,wilayah.nama_wilayah');
		$this->db->from('hukdis');
		$this->db->join('wilayah','wilayah.id = hukdis.kanwil_id');
		$dataHukdis['hukdis'] = $this->db->get_where(null,['no_ticket' => $no_ticket])->row_array();

		$this->db->select('detail_hukdis.*,user.nama');
		$this->db->from('detail_hukdis');
		$this->db->join('user','user.nip = detail_hukdis.nip');
		$this->db->order_by('id_timeline desc');

		$dataHukdis['detail'] =$this->db->get_where(null,['no_ticket' => $no_ticket])->result_array();
		
		

		if($dataHukdis){
			
		$this->load->view('templates/header',$data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('profile/detail_profile_hukdis',$dataHukdis);
		$this->load->view('templates/footer');

		}else{
			echo "DATA TIDAK ADA";
		}

		
	}
}