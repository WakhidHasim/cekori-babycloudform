<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('M_product', 'm_product');
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'page' => 'pages/admin/dashboard/index',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'count_products' => $this->m_product->getCountProduct()
        ];

        $this->load->view('layouts/admin/app', $data, false);
    }
}
