<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    // Dashboard laporan
    public function index()
    {
        $data['total_pasien'] = $this->db->count_all('tb_pasien');
        $data['total_dokter'] = $this->db->count_all('tb_dokter');
        $data['total_pendaftaran'] = $this->db->count_all('tb_pendaftaran');

        $this->db->where('status', 'Disetujui');
        $data['total_disetujui'] =
            $this->db->count_all_results('tb_pendaftaran');

        $this->db->where('status', 'Ditolak');
        $data['total_ditolak'] =
            $this->db->count_all_results('tb_pendaftaran');

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function pasien()
{
    $keyword = $this->input->get('keyword');

    $this->db->from('tb_pasien');

    if($keyword){
        $this->db->like('nama', $keyword);
    }

    $this->db->order_by('id_pasien', 'DESC');

    $data['pasien'] = $this->db->get()->result();
    $data['keyword'] = $keyword;
    $data['title'] = 'Laporan Pasien';

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/pasien', $data);
    $this->load->view('templates/footer');
}

public function cetak_pasien()
{
    $data['pasien'] = $this->db->get('tb_pasien')->result();

    $this->load->view('laporan/cetak_pasien', $data);
}
    public function dokter()
{
    $keyword = $this->input->get('keyword');

    $this->db->from('tb_dokter');

    if($keyword){
        $this->db->like('nama_dokter', $keyword);
    }

    $this->db->order_by('id_dokter', 'DESC');

    $data['dokter'] = $this->db->get()->result();
    $data['keyword'] = $keyword;
    $data['title'] = 'Laporan Dokter';

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/dokter', $data);
    $this->load->view('templates/footer');
}

public function cetak_dokter()
{
    $data['dokter'] = $this->db->get('tb_dokter')->result();

    $this->load->view('laporan/cetak_dokter', $data);
}
    // Laporan Pendaftaran
    public function pendaftaran()
    {
        $status = $this->input->get('status');

        $this->db->select('*');
        $this->db->from('tb_pendaftaran');
        $this->db->join('tb_pasien',
            'tb_pasien.id_pasien = tb_pendaftaran.id_pasien');
        $this->db->join('tb_dokter',
            'tb_dokter.id_dokter = tb_pendaftaran.id_dokter');

        if($status){
            $this->db->where('status', $status);
        }

        $data['pendaftaran'] = $this->db->get()->result();
        $data['status'] = $status;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/pendaftaran', $data);
        $this->load->view('templates/footer');
    }

    // Cetak Pendaftaran
    public function cetak_pendaftaran()
    {
        $this->db->select('*');
        $this->db->from('tb_pendaftaran');
        $this->db->join('tb_pasien',
            'tb_pasien.id_pasien = tb_pendaftaran.id_pasien');
        $this->db->join('tb_dokter',
            'tb_dokter.id_dokter = tb_pendaftaran.id_dokter');

        $data['pendaftaran'] = $this->db->get()->result();

        $this->load->view('laporan/cetak_pendaftaran', $data);
    }
}