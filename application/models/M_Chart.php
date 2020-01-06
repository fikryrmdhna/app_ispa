<?php

class M_Chart extends CI_Model
{
    public function getChartPie()
    {
        return $this->db->query('SELECT COUNT(`tb_pengujian`.`kode_pengujian`) AS total, `tb_penyakit`.`nama_penyakit` FROM `tb_pengujian` LEFT JOIN `tb_penyakit` ON `tb_penyakit`.`kode_penyakit` = `tb_pengujian`.`result` GROUP BY `tb_pengujian`.`result` ')->result_array();
    }

    public function getDataUjiTop()
    {
        return $this->db->query('SELECT COUNT(`tb_pengujian`.`kode_pengujian`) AS total, `tb_penyakit`.`nama_penyakit` FROM `tb_pengujian` LEFT JOIN `tb_penyakit` ON `tb_penyakit`.`kode_penyakit` = `tb_pengujian`.`result` GROUP BY `tb_pengujian`.`result` ORDER BY total DESC')->row_array();
    }
}
