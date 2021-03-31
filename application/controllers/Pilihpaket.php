<?php

class Pilihpaket extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Pilih Paket yang Diinginkan';

		
		
		$this->load->view('templates/header', $data);
		$this->load->view('pilihpaket/index', $data);
		$this->load->view('templates/footer');
	}
}
