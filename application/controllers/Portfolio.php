<?php

class Portfolio extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Pilih Paket yang Diinginkan';

		
		
		$this->load->view('templates/header', $data);
		$this->load->view('portfolio/index', $data);
		$this->load->view('templates/footer');
	}
}
