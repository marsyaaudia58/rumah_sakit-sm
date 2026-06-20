<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    // HALAMAN REGISTER PASIEN
    public function register()
    {
        $this->load->view('auth/register');
    }

    // SIMPAN DATA REGISTER
    public function proses_register()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' =>
            $this->input->post('tanggal_lahir'),
            'alamat' =>
            $this->input->post('alamat'),
            'no_telp' =>
            $this->input->post('no_telp'),
            'username' =>
            $this->input->post('username'),
            'password' =>
            $this->input->post('password')
        ];
        $this->Auth_model
             ->register_pasien($data);
        $this->session->set_flashdata(
            'success',
            'Registrasi berhasil, silahkan login'
        );
        redirect('auth');
    }


    public function login()
    {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    // CEK ADMIN
    $admin = $this->db->get_where('tb_admin', [
        'username' => $username,
        'password' => $password
    ])->row();

    if($admin){

        $this->session->set_userdata([
            'id_admin' => $admin->id_admin,
            'username' => $admin->username,
            'role' => 'admin',
            'login' => TRUE
        ]);

        redirect('dashboard');
    }

    // CEK PASIEN
    $pasien = $this->db->get_where('tb_pasien', [
        'username' => $username,
        'password' => $password
    ])->row();

    if($pasien){

        $this->session->set_userdata([
            'id_pasien' => $pasien->id_pasien,
            'nama' => $pasien->nama,
            'username' => $pasien->username,
            'role' => 'pasien',
            'login' => TRUE
        ]);

        redirect('frontend');
    }

    $this->session->set_flashdata(
        'error',
        'Username atau Password salah'
    );

    redirect('auth');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}