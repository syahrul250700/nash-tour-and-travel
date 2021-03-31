<?php

class Portfolio extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Halaman Portfolio';

		
		
		$this->load->view('templates/header', $data);
		$this->load->view('portfolio/index', $data);
		$this->load->view('templates/footer');
	}
}
