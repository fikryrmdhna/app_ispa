<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Konsultasi';

		//query data gejala dari database
		$data['gejala'] = $this->db->get('tb_gejala')->result_array();

		$this->load->view('templates/konsultasi_header', $data);
		$this->load->view('konsultasi', $data);
		$this->load->view('templates/footer');
	}

	public function result()
	{
		$data['title'] = "Diagnosa";

		//query data gejala dari database
		$data['gejala'] = $this->db->get('tb_gejala')->result_array();

		//query data penyakit dari database
		$data['penyakit'] = $this->db->get('tb_penyakit')->result_array();

		$this->load->view('templates/konsultasi_header', $data);
		$this->load->view('diagnosa', $data);
		$this->load->view('templates/footer');
	}

	public function diagnosa()
	{
		//kode verify diterima dengan metode POST
		$verify = $this->input->post('verify');

		//data nama diterima dengan metode POST
		$nama 	= $this->input->post('nama');

		//data email diterima dengan metode POST
		$email 	= $this->input->post('email');

		//data gejala diterima dengan metode POST
		for ($i = 1; $i <= 31; $i++) {
			$gejala[$i] = $this->input->post('quest' . $i);
		}

		//kondisi pengecekan kode verify
		if (isset($verify)) {

			//jika ada kode verify maka jalan perintah dibawah ini

			//pengulangan untuk menghasilkan nilai Ya atau Tidak ke setiap gejala yang dipilih	
			for ($i = 1; $i <= 31; $i++) {
				if ($gejala[$i] == null) {
					$gejala[$i] = "Tidak";
				} else {
					$gejala[$i] = "Ya";
				}
			}

			//mengubah data gejala yang dipilih ke dalam array
			$dataGejala = [
				'nama'	  => $this->session->userdata('nama'),
				'email'	  => $this->session->userdata('email'),
				'gejala1' => $gejala[1],
				'gejala2' => $gejala[2],
				'gejala3' => $gejala[3],
				'gejala4' => $gejala[4],
				'gejala5' => $gejala[5],
				'gejala6' => $gejala[6],
				'gejala7' => $gejala[7],
				'gejala8' => $gejala[8],
				'gejala9' => $gejala[9],
				'gejala10' => $gejala[10],
				'gejala11' => $gejala[11],
				'gejala12' => $gejala[12],
				'gejala13' => $gejala[13],
				'gejala14' => $gejala[14],
				'gejala15' => $gejala[15],
				'gejala16' => $gejala[16],
				'gejala17' => $gejala[17],
				'gejala18' => $gejala[18],
				'gejala19' => $gejala[19],
				'gejala20' => $gejala[20],
				'gejala21' => $gejala[21],
				'gejala22' => $gejala[22],
				'gejala23' => $gejala[23],
				'gejala24' => $gejala[24],
				'gejala25' => $gejala[25],
				'gejala26' => $gejala[26],
				'gejala27' => $gejala[27],
				'gejala28' => $gejala[28],
				'gejala29' => $gejala[29],
				'gejala30' => $gejala[30],
				'gejala31' => $gejala[31],
			];

			//data yang telah diubah menjadi array, selanjutnya disimpan ke dalam session
			$this->session->set_userdata($dataGejala);

			//dialihkan ke halaman hasil diagnosa
			redirect('konsultasi/result');
		} else {
			//jika tidak ada kode verify maka akan dialihkan ke home
			redirect('home');
		}
	}
}
