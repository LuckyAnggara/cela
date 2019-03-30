<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("login/proses_login");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$validation = $this->form_validation;
		$validation->set_rules($this->proses_login->rules());
		if ($this->form_validation->run() == false) {
			$this->load->view('login/login');
		} else {
			$this->_login();
		}
	}
	private function _login()
	{
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', ['nip' => $nip])->row_array();
		if ($user) {
			if ($user['status_login'] == 0) {
				if (password_verify($password, $user['password'])) {

					$data = [
						'id' => $user['id'],
						'level_id' => $user['level_id'],
						'status_login' => $user['status_login'],
						'login' => 'allow'
					];

					$this->proses_login->ubahStatusLogin($user['id']); // ubah status login menjadi 1 sebelum di input ke session
					$this->session->set_userdata($data);

					redirect('dashboard');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!!</div>');
					redirect('login'); // jika password salah
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Sedang Login</div>');
				redirect('login'); // jika akun sedang login
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIP Belum Terdaftar. Silahkan Hubungi ADMIN</div>');
			redirect('login'); // jika akun sedang login
		}
	}
	public function logout()
	{
		$this->proses_login->ubahStatusLogout($this->session->userdata('id'));
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('level_id');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Berhasil Logout</div>');
		redirect('login'); // jika berhasil logout
	}
}
