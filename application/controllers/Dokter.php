<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Dokter_model');

        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['dokter'] = $this->Dokter_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dokter/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dokter/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nama_dokter' => $this->input->post('nama_dokter'),
            'spesialis' => $this->input->post('spesialis')
        ];

        $this->Dokter_model->insert($data);

        redirect('dokter');
    }

   public function hapus($id)
{
    $cek = $this->db->get_where('tb_pendaftaran', [
        'id_dokter' => $id
    ])->num_rows();

    if ($cek > 0) {
        $this->session->set_flashdata(
            'error',
            'Dokter tidak dapat dihapus karena masih digunakan pada data pendaftaran.'
        );
    } else {
        $this->Dokter_model->delete($id);
        $this->session->set_flashdata(
            'success',
            'Data dokter berhasil dihapus.'
        );
    }

    redirect('dokter');
}

public function edit($id)
{
    $data['dokter'] = $this->db
        ->get_where('tb_dokter', ['id_dokter' => $id])
        ->row();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('dokter/edit', $data);
    $this->load->view('templates/footer');
}

public function update($id)
{
    $data = [
        'nama_dokter' => $this->input->post('nama_dokter'),
        'spesialis'   => $this->input->post('spesialis')
    ];

    $this->Dokter_model->update($id, $data);

    redirect('dokter');
}
}