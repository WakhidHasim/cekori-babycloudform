<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_blog');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['blog'] = $this->m_blog->tampil_data();
		$this->load->view('blog',$data);
	}

	public function post($id)
	{
		$where = array('id_post' => $id );
		$data['blog'] = $this->m_blog->tampil_data_where($where);
		$this->load->view('artikel',$data);
	}

	public function tags($tag)
	{
		$where = $tag;
		$data['blog'] = $this->m_blog->tampil_data_tag($where);
		$this->load->view('blog',$data);
	}
}
