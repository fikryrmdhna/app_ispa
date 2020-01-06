<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Profile extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Profil User';

        $data['user'] = $this->db->get_where('tb_user', ['id' => $this->session->userdata('id')])->row_array();

        $this->load->view('templates/dashboard/dashboard_header', $data);
        $this->load->view('user_profile', $data);
        $this->load->view('templates/dashboard/dashboard_footer');
    }
}
