<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cekori extends CI_Controller {

	public function index()
	{
		$this->load->view('cekoriginal');
	}

	public function cekproduk()
	{
		$where = $this->input->post('kode_unik');
		$data['kode'] = $this->m_produk->tampil_data($where);
		$this->load->view('hasil',$data);
	}
}
