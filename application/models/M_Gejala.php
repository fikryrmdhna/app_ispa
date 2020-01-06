<?php

class M_Gejala extends CI_Model
{
    var $table = 'tb_gejala';

    public function getAllGejala()
    {
        return $this->db->get('tb_gejala')->result_array();
    }

    // Untuk method edit gejala
    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('kode_gejala', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function gejala_update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function getAllPenyakit()
    {
        return $this->db->get('tb_penyakit')->result_array();
    }

    public function getPenyakitById($kode_penyakit)
    {
        return $this->db->get_where('tb_penyakit', ['kode_penyakit' => $kode_penyakit])->row_array();
    }

    public function edit_penyakit()
    {
        $data = [
            "kode_penyakit" => $this->input->post('kode_penyakit'),
            "nama_penyakit" => $this->input->post('nama_penyakit'),
            "penyebab" => $this->input->post('penyebab'),
            "solusi" => $this->input->post('solusi')
        ];

        $this->db->where('kode_penyakit', $this->input->post('kode_penyakit'));
        $this->db->update('tb_penyakit', $data);
    }
}
