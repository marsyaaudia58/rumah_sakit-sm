<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('tb_pasien')->result();
    }

    public function get_by_id($id)
    {
    return $this->db
        ->get_where('tb_pasien', ['id_pasien' => $id])
        ->row();
    }

    public function insert($data)
    {
        return $this->db->insert('tb_pasien', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_pasien', $id);
        return $this->db->delete('tb_pasien');
    }

    public function update($id, $data)
    {
    $this->db->where('id_pasien', $id);
    return $this->db->update('tb_pasien', $data);
    }
}