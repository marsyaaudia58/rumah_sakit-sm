<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');

        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['pendaftaran'] = $this->Pendaftaran_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['pasien'] = $this->Pendaftaran_model->get_pasien();
        $data['dokter'] = $this->Pendaftaran_model->get_dokter();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/tambah',$data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'id_pasien' => $this->input->post('id_pasien'),
            'id_dokter' => $this->input->post('id_dokter'),
            'keluhan' => $this->input->post('keluhan'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'jam_kunjungan' => $this->input->post('jam_kunjungan'),
            'status' => 'Proses'
        ];

        $this->Pendaftaran_model->insert($data);

        redirect('pendaftaran');
    }

    public function setujui($id)
    {
        $this->Pendaftaran_model->update_status($id,'Disetujui');
        redirect('pendaftaran');
    }

    public function tolak($id)
    {
        $this->Pendaftaran_model->update_status($id,'Ditolak');
        redirect('pendaftaran');
    }
}