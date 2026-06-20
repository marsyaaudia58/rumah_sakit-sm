<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where(
            'tb_admin',
            [
                'id_admin' => $this->session->userdata('id_admin')
            ]
        )->row();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('profil/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['admin'] = $this->db->get_where(
            'tb_admin',
            [
                'id_admin' => $this->session->userdata('id_admin')
            ]
        )->row();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('profil/edit', $data);
        $this->load->view('templates/footer');
    }
}