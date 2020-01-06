<?php

class M_Datauji extends CI_Model
{
    public function getAllDatauji()
    {
        return $this->db->get('tb_pengujian')->result_array();
    }

    public function hapusDataUji($kode_pengujian)
    {
        $this->db->where('kode_pengujian', $kode_pengujian);
        $this->db->delete('tb_pengujian');
    }
}
