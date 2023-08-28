<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_katalog extends CI_Model {

	function tampil_data()
	{
		return $this->db->get('katalog');
	}

	function tampil($where)
	{
		return $this->db->query("select * from katalog where id_produk = '$where'");
	}
}
