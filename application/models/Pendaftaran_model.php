<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {

    public function get_all()
{
    $this->db->select('tb_pendaftaran.*, tb_pasien.nama, tb_dokter.nama_dokter');
    $this->db->from('tb_pendaftaran');
    $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pendaftaran.id_pasien');
    $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pendaftaran.id_dokter');

    return $this->db->get()->result();
}

    public function get_dokter()
    {
        return $this->db->get('tb_dokter')->result();
    }

    public function get_pasien()
    {
        return $this->db->get('tb_pasien')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('tb_pendaftaran',$data);
    }

    public function update_status($id,$status)
    {
        $this->db->where('id_pendaftaran',$id);
        return $this->db->update('tb_pendaftaran',[
            'status'=>$status
        ]);
    }
}