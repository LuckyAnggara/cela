<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses_Login extends CI_Model
{

    public function rules()
    {
        return [
            [
                'field' => 'nip',
                'label' => 'NIP',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'Mohon kolom NIP di Isi'
                )
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'Lengkapi Passwordnya'
                )
            ],

        ];
    }

    public function ubahStatusLogin($id)
    {
        //update status login dari 0 ke 1
        $data = array(
            'status_login' => 1
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function ubahStatusLogout($id)
    {
        //update status login dari 0 ke 1
        $data = array(
            'status_login' => 0
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}
