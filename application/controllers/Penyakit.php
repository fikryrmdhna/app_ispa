<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Gejala');
    }

    public function index()
    {
        $data['title'] = 'Penyakit';

        $data['datapenyakit'] = $this->M_Gejala->getAllPenyakit();

        $this->load->view('templates/dashboard/dashboard_header', $data);
        $this->load->view('penyakit', $data);
        $this->load->view('templates/dashboard/dashboard_footer');
    }

    public function edit_penyakit($kode_penyakit)
    {
        $data['title'] = 'Edit Penyakit';

        $data['datapenyakit'] = $this->M_Gejala->getPenyakitById($kode_penyakit);

        $this->form_validation->set_rules('penyebab', 'Penyebab', 'required');
        $this->form_validation->set_rules('solusi', 'Solusi', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/dashboard/dashboard_header', $data);
            $this->load->view('edit_penyakit', $data);
            $this->load->view('templates/dashboard/dashboard_footer');
        } else {
            $this->M_Gejala->edit_penyakit();
            redirect('penyakit');
        }
    }
}
