<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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
            'title' => 'Product',
            'page' => 'pages/admin/product/index',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->load->view('layouts/admin/app', $data, false);
    }

    public function getProducts()
    {
        $results = $this->m_product->getProducts();
        $data = [];
        $no = $_POST['start'];

        foreach ($results as $result) {
            $row = array();
            $row[] = ++$no;
            $row[] = $result->kode_bcf;
            $row[] = $result->tgl_jual;
            $row[] = '
                <a href="#" class="btn btn-success btn-sm" onclick="getId(' . "'" . $result->kode_bcf . "','edit'" . ')"> Edit </a>
            ';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_product->countAllData(),
            "recordsFiltered" => $this->m_product->countFilteredData(),
            "data" => $data
        );

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function addProduct()
    {
        $data = [
            "kode_bcf" => $this->input->post('kode_bcf', true),
            "tgl_jual" => $this->input->post('tgl_jual', true)
        ];

        if ($this->m_product->addProduct($data) > 0) {
            $message['status'] = 'success';
        } else {
            $message['status'] = 'failed';
        };

        $this->output->set_content_type('application/json')->set_output(json_encode($message));
    }

    public function getId($kode_bcf)
    {
        $data = $this->m_product->getProductById($kode_bcf);

        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function editProduct()
    {
        $data = [
            "kode_bcf" => $this->input->post('kode_bcf', true),
            "tgl_jual" => $this->input->post('tgl_jual', true)
        ];

        $kode_bcf = $this->input->post('kode_bcf', true);

        if ($this->m_product->editProduct(['kode_bcf' => $kode_bcf], $data)) {
            $message['status'] = 'success';
        } else {
            $message['status'] = 'failed';
        };

        $this->output->set_content_type('application/json')->set_output(json_encode($message));
    }
}
