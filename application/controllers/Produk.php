<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_katalog');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['katalog'] = $this->m_katalog->tampil_data();
		$this->load->view('produk',$data);
	}

	public function detail($id)
	{
		$where = $id;
		$data['katalog'] = $this->m_katalog->tampil($where);
		$this->load->view('detail_produk',$data);
	}
}
