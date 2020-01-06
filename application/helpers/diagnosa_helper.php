<?php

//Ini buat mencari jumlah sesuai jawaban per kategori penyakit
function getKK($data, $kat, $kolom)
{
	$ci = get_instance();
	$jum = $ci->db->query("SELECT kategori FROM tb_datalatih WHERE $kolom = '$data' AND kategori = '$kat'")->num_rows();

	return $jum;
}

//Ini buat mencari jumlah datalatih per kategori penyakit
function getOut($kat)
{
	$ci = get_instance();
	$jum = $ci->db->query("SELECT `kategori` FROM `tb_datalatih` WHERE `kategori` = '$kat'")->num_rows();

	return $jum;
}

//Menyimpan Data Result Hasil Diagnosa
function saveResult($kode_penyakit)
{
	$ci = get_instance();
	$dataResult = [
		'date_created' 	=> time(),
		'nama' 			=> $ci->session->userdata('nama'),
		'email' 		=> $ci->session->userdata('email'),
		'gejala1' 		=> $ci->session->userdata('gejala1'),
		'gejala2' 		=> $ci->session->userdata('gejala2'),
		'gejala3' 		=> $ci->session->userdata('gejala3'),
		'gejala4' 		=> $ci->session->userdata('gejala4'),
		'gejala5' 		=> $ci->session->userdata('gejala5'),
		'gejala6' 		=> $ci->session->userdata('gejala6'),
		'gejala7' 		=> $ci->session->userdata('gejala7'),
		'gejala8' 		=> $ci->session->userdata('gejala8'),
		'gejala9' 		=> $ci->session->userdata('gejala9'),
		'gejala10' 		=> $ci->session->userdata('gejala10'),
		'gejala11' 		=> $ci->session->userdata('gejala11'),
		'gejala12' 		=> $ci->session->userdata('gejala12'),
		'gejala13' 		=> $ci->session->userdata('gejala13'),
		'gejala14' 		=> $ci->session->userdata('gejala14'),
		'gejala15' 		=> $ci->session->userdata('gejala15'),
		'gejala16' 		=> $ci->session->userdata('gejala16'),
		'gejala17' 		=> $ci->session->userdata('gejala17'),
		'gejala18' 		=> $ci->session->userdata('gejala18'),
		'gejala19' 		=> $ci->session->userdata('gejala19'),
		'gejala20' 		=> $ci->session->userdata('gejala20'),
		'gejala21' 		=> $ci->session->userdata('gejala21'),
		'gejala22' 		=> $ci->session->userdata('gejala22'),
		'gejala23' 		=> $ci->session->userdata('gejala23'),
		'gejala24' 		=> $ci->session->userdata('gejala24'),
		'gejala25' 		=> $ci->session->userdata('gejala25'),
		'gejala26' 		=> $ci->session->userdata('gejala26'),
		'gejala27' 		=> $ci->session->userdata('gejala27'),
		'gejala28' 		=> $ci->session->userdata('gejala28'),
		'gejala29' 		=> $ci->session->userdata('gejala29'),
		'gejala30' 		=> $ci->session->userdata('gejala30'),
		'gejala31' 		=> $ci->session->userdata('gejala31'),
		'result'		=> $kode_penyakit
	];

	$ci->db->insert('tb_pengujian', $dataResult);
}
