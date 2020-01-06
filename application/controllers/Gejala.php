<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Gejala');
    }

    public function index()
    {
        $data['title'] = 'Gejala';

        $data['datagejala'] = $this->M_Gejala->getAllGejala();

        $this->load->view('templates/dashboard/dashboard_header', $data);
        $this->load->view('gejala', $data);
        $this->load->view('templates/dashboard/dashboard_footer');
    }

    public function ajax_edit($id)
    {
        $data = $this->M_Gejala->get_by_id($id);
        echo json_encode($data);
    }

    public function gejala_update()
    {
        $data = array(
            'kode_gejala' => $this->input->post('kode_gejala'),
            'gejala' => $this->input->post('gejala'),
        );
        $this->M_Gejala->gejala_update(array('kode_gejala' => $this->input->post('kode_gejala')), $data);

        echo json_encode(array("status" => true));
    }
}
