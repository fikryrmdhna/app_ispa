<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_latih extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Latih';


        $this->load->model('M_Datalatih');
        $data['datalatih'] = $this->M_Datalatih->getAllDatalatih();

        $this->load->view('templates/dashboard/dashboard_header', $data);
        $this->load->view('data_latih', $data);
        $this->load->view('templates/dashboard/dashboard_footer');
    }
}
