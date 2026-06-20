<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');

        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['pasien'] = $this->Pasien_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
{
    $data = [
        'nama' => $this->input->post('nama'),
        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
        'alamat' => $this->input->post('alamat'),
        'no_telp' => $this->input->post('no_telp'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
    ];

    $insert = $this->Pasien_model->insert($data);

    if($insert){
        echo "BERHASIL";
    } else {
        echo $this->db->error()['message'];
    }
}

    public function hapus($id)
    {
        $this->Pasien_model->hapus($id);

        redirect('pasien');
    }

    public function edit($id)
{
    $data['pasien'] = $this->db
        ->get_where('tb_pasien', ['id_pasien' => $id])
        ->row();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('pasien/edit', $data);
    $this->load->view('templates/footer');
}

public function dashboard()
{
    $this->load->view('pasien/frontend');
}

public function update($id)
{
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {

        $data['pasien'] = $this->db
            ->get_where('tb_pasien', ['id_pasien' => $id])
            ->row();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/edit', $data);
        $this->load->view('templates/footer');

    } else {

        $data = [
            'nama'           => $this->input->post('nama'),
            'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
            'alamat'         => $this->input->post('alamat'),
            'no_telp'        => $this->input->post('no_telp'),
            'username'       => $this->input->post('username'),
            'password'       => $this->input->post('password')
        ];

        $this->Pasien_model->update($id, $data);

        $this->session->set_flashdata('success', 'Data pasien berhasil diupdate');
        redirect('pasien');
    }
}
}