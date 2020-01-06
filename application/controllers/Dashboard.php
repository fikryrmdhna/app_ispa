<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Chart');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['jumlah_uji'] = $this->db->get('tb_pengujian')->num_rows();
        $data['jumlah_penyakit'] = $this->db->get('tb_penyakit')->num_rows();
        $data['jumlah_datalatih'] = $this->db->get('tb_datalatih')->num_rows();

        $data['chartpie'] = $this->M_Chart->getChartPie();
        $data['dataujitop'] = $this->M_Chart->getDataUjiTop();

        $this->load->view('templates/dashboard/dashboard_header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/dashboard/dashboard_footer');
    }
}
