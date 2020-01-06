<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Gejala');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['datapenyakit'] = $this->M_Gejala->getAllPenyakit();

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('home');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email      = htmlspecialchars($this->input->post('email'));
        $password   = htmlspecialchars($this->input->post('password'));

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['password'] === $password) {
                $data = [
                    'id' => $user['id']
                ];

                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                echo "<script>alert('Password Anda Salah')</script>";
                echo "<script>window.location.href='" . base_url('home') . "'</script>";
            }
        }
    }

    public function konsul()
    {
        // data nama akan diterima dengan metod POST
        $nama = $this->input->post('nama');

        // data email akan diterima dengan metod POST
        $email = $this->input->post('email');

        $dataGejala = [
            'nama' => $nama,
            'email' => $email,
        ];

        // data yang diubah jadi array akan disimpan ke session
        $this->session->set_userdata($dataGejala);

        // dialihkan ke halaman konsultasi
        redirect('konsultasi');
    }
}
