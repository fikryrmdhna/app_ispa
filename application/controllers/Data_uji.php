<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_uji extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Datauji');
    }

    public function index()
    {
        $data['title'] = 'Data Uji';

        $data['datauji'] = $this->M_Datauji->getAllDatauji();

        $this->load->view('templates/dashboard/dashboard_header', $data);
        $this->load->view('data_uji', $data);
        $this->load->view('templates/dashboard/dashboard_footer');
    }

    public function hapus($kode_pengujian)
    {
        $data['datauji'] = $this->M_Datauji->getAllDatauji();

        $this->M_Datauji->hapusDataUji($kode_pengujian);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('data_uji');
    }
}
