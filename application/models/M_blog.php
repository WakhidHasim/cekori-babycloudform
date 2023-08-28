<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model{

	function tampil_data(){
		return $this->db->get('blog');
	}

	function tampil_data_where($where){
		return $this->db->get_where('blog',$where);
	}

	function tampil_data_tag($where){
		return $this->db->query("SELECT * FROM blog WHERE tags LIKE '%$where%'");
	}
}