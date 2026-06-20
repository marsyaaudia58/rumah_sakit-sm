<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['total_pasien'] = $this->db->count_all('tb_pasien');

        $data['total_pendaftaran'] = $this->db->count_all('tb_pendaftaran');

        $data['total_dokter'] = $this->db->count_all('tb_dokter');

        $this->db->where('status','Disetujui');
        $data['total_disetujui'] =
            $this->db->count_all_results('tb_pendaftaran');

        $this->db->where('status','Ditolak');
        $data['total_ditolak'] =
            $this->db->count_all_results('tb_pendaftaran');

        $this->db->where('status', 'Proses');
        $data['total_proses'] = $this->db->count_all_results('tb_pendaftaran');

        $this->db->select('tb_pendaftaran.*, tb_pasien.nama');
$this->db->from('tb_pendaftaran');
$this->db->join('tb_pasien','tb_pasien.id_pasien = tb_pendaftaran.id_pasien');
$this->db->order_by('tb_pendaftaran.id_pendaftaran','DESC');
$this->db->limit(5);

$data['pendaftaran_terbaru'] = $this->db->get()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}