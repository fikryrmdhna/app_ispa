<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        // if ($this->session->userdata('email')) {
        //     redirect('dashboard');
        // } jika sudah login tidak bisa akses halaman lain

        // Validasi input login
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'Login';

            $this->load->view('templates/admin/admin_header', $data);
            $this->load->view('auth', $data);
            $this->load->view('templates/admin/admin_footer');
        } else {
            // akan didirect ke method _login
            $this->_login();
        }
    }

    private function _login()
    {
        $email      = htmlspecialchars($this->input->post('email'));
        $password   = htmlspecialchars($this->input->post('password'));

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        // jika user ada
        if ($user) {

            if ($user['password'] === $password) {
                $data = [
                    'id' => $user['id']
                ];

                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password anda salah </div>');
                redirect('auth');
            }
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');

        redirect('home');
    }
}
