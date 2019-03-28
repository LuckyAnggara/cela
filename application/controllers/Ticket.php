<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {


	function __construct(){
		parent ::__construct();
		$this->load->model("data/getWilayah");
		$this->load->model("data/getPelanggaran");
		$this->load->model("data/dataGolongan");
		$this->load->model("ticket/proses_model");
        $this->load->library('form_validation');
       

	}

	public function index()
	{
		$id = 1;
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();
		$data['wilayah'] = $this->getWilayah->getNamaWilayah();
		$data['pelanggaran'] = $this->getPelanggaran->getDataPelanggaran();
		$data['golongan'] = $this->dataGolongan->get_all();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('ticket/index', $data);
		$this->load->view('templates/footer');
	}

	public function add()
    {
        $validation = $this->form_validation;
        $validation->set_rules($this->proses_model->rules());

        if ($validation->run()==false) {

        $id = 1;
		$data['dbase'] = $this->db->get_where('user',['id' => $id])->row_array();
		$data['wilayah'] = $this->getWilayah->getNamaWilayah();
		$data['pelanggaran'] = $this->getPelanggaran->getDataPelanggaran();
		$data['golongan'] = $this->dataGolongan->get_all();
        

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('ticket/index',$data);
		$this->load->view('templates/footer');
            // $this->proses_model->save();
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        }else{

        $this->proses_model->save_suratMasuk();
        $this->proses_model->save_ticket();
        $this->proses_model->save_hukdis();
    	}
    }

	public function upload()
	{
		$this->proses_model->test();
	}

	public function getDataWilayah()
	{
		$input = $this->input->get('kec');
		$query = $this->getWilayah->getNamaWilayah($input,'wilayah');
		echo json_encode($query);
	}

	public function getDataSatker()
	{
		$input = $this->input->post('id');
		$query = $this->getWilayah->getNamaSatker($input,'id');
		echo json_encode($query);
	}
}