<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Proses_Model extends CI_Model{

	//variable untuk dbase Surat Masuk
    public $no_ticket;
	public $no_surat;
    public $tanggalSurat;
    public $tanggalMasuk;
    public $asal_surat;
    public $perihal;

    


 //    // variable untuk dbase Ticket
 //    // $post = $this->input->post();
 //    public $no_ticket = uniqid();
 //    public $surat_no = $post["no_surat"];
 //    public $tahun;
 //    public $tanggal_pembuatan;
 //    public $user;
 //    public $status = 0;

 //    // variable untuk dbase Hukdi
 //    public $nama;
 //    public $nip;
 //    public $image = 'default.jpg';
 //    public $wilayah_id;
 //    public $satker_id;
 //    public $golongan;
 //    public $jabatan_terakhir;
 //    public $pelanggaran_id;


    public function rules()
    {
        return [
            ['field' => 'tanggalDiterima',
            'label' => 'Tanggal Diterima',
            'rules' => 'required|trim',
            'errors' => array(
                        'required' => 'Mohon Isi Tanggal Diterima Surat')],

            ['field' => 'no_surat',
            'label' => 'No Surat',
            'rules' => 'required|trim',
            'errors' => array(
                        'required' => 'Mohon Isi Nomor Surat')],
            
            ['field' => 'tanggalSurat',
            'label' => 'Tanggal Surat',
            'rules' => 'required|trim',
            'errors' => array(
                        'required' => 'Mohon Isi Tanggal Surat')],

            ['field' => 'asalSurat',
            'label' => 'Asal Surat',
            'rules' => 'required|trim',
            'errors' => array(
                        'required' => 'Mohon Isi Asal Surat')],

            ['field' => 'perihal',
            'label' => 'Perihal',
            'rules' => 'required|trim',
            'errors' => array(
                        'required' => 'Perihal Surat Harus di isi')],

            ['field' => 'nip',
            'label' => 'NIP',
            'rules' => 'numeric|required',
            'errors' => array(
                        'required' => 'Mohon Isi Nomor Induk Pegawai',
                        'numeric' => 'Hanya di isi Angka'
                    )],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required',
            'errors' => array(
                        'required' => 'Mohon Isi Nama Lengkap')],


            ['field' => 'golongan',
            'label' => 'Golongan',
            'rules' => 'required',
            'errors' => array(
                        'required' => 'Mohon Isi Golongan')],

            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'required',
            'errors' => array(
                        'required' => 'Mohon Isi Jabatan Terakhir')],

            ['field' => 'pelanggaran',
            'label' => 'Pelanggaran',
            'rules' => 'required',
            'errors' => array(
                        'required' => 'Mohon Isi Jenis Pelanggaran')],
        ];
    }

    public function save_suratMasuk()
    {
        $post = $this->input->post();
        $data=[
        'no_surat' =>$post["no_surat"],
        'tanggal_Surat'=> DateTime::createFromFormat('m/d/Y',$post["tanggalSurat"])->format('y-m-d'),
        'tanggal_Masuk'=> DateTime::createFromFormat('m/d/Y',$post["tanggalDiterima"])->format('y-m-d'),
        'asal_surat'=> $post["asalSurat"],
        'perihal' =>$post["perihal"]
        ];
        $this->db->insert('surat_masuk', $data);
    }

    public function save_ticket()
    {
        $this->no_ticket = random_string('alnum',6);
        $post = $this->input->post();
        $data=[
        'no_ticket' => $this->no_ticket,
        'surat_no' => $post["no_surat"],
        'tahun' => date('Y'),
        'tanggal_pembuatan '=> date('Y-m-d H:i:s'),
        'user' => 1,
        'status' => 1
        ];
        
        $this->db->insert('ticket', $data);
    }

    public function save_hukdis()
    {
        $post = $this->input->post();
        $data=[
        'no_ticket' => $this->no_ticket,
        'nama' => $post["nama"],
        'nip' => $post["nip"],
        'image' => 'dafault.jpg',
        'wilayah_id' => $post["namaWilayah"],
        'satker_id' => $post["namaSatker"],
        'golongan' => $post["golongan"],
        'jabatan_terkahir' => $post["jabatan"],
        'pelanggaran_id' => $post["pelanggaran"]
        ];
        
        $this->db->insert('hukdis', $data);
    }

    public function noTicket (){
        return $this->no_ticket;
    }


	}