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
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'products' => $this->m_product->getAllProduct()
        ];

        $this->load->view('layouts/admin/app', $data, false);
    }

    public function addProduct()
    {
        $this->form_validation->set_rules('kode_bcf', 'Product Code', 'required|trim');
        $this->form_validation->set_rules('tgl_jual', 'Sale Date', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Add Product',
                'page' => 'pages/admin/product/create',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
            ];

            $this->load->view('layouts/admin/app', $data, false);
        } else {
            $data = [
                "kode_bcf" => $this->input->post('kode_bcf', true),
                "tgl_jual" => $this->input->post('tgl_jual', true)
            ];

            $this->m_product->addProduct($data);
            $this->session->set_flashdata('success', 'Product Added Successfully!');
            redirect('product');
        }
    }

    // public function import()
    // {
    //     $data = [
    //         'title' => 'Import Product',
    //         'page' => 'pages/admin/product/import',
    //         'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
    //     ];

    //     $this->load->view('layouts/admin/app', $data, false);
    // }

    public function editProduct($kode_bcf)
    {
        $this->form_validation->set_rules('kode_bcf', 'Product Code', 'required|trim');
        $this->form_validation->set_rules('tgl_jual', 'Sale Date', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit Product',
                'page' => 'pages/admin/product/edit',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'product' => $this->m_product->getProduct($kode_bcf)
            ];

            $this->load->view('layouts/admin/app', $data, false);
        } else {
            $data['product'] = $this->m_product->getProduct($kode_bcf);

            $data = [
                "kode_bcf" => $this->input->post('kode_bcf', true),
                "tgl_jual" => $this->input->post('tgl_jual', true)
            ];

            $this->m_product->editProduct($data, $kode_bcf);
            $this->session->set_flashdata('success', 'Product Successfully Edited!');
            redirect('product');
        }
    }

    public function deleteProduct($kode_bcf)
    {
        $data['product'] = $this->m_product->getProduct($kode_bcf);

        $this->m_product->deleteProduct($kode_bcf);
        $this->session->set_flashdata('success', 'Product Successfully Deleted!');
        redirect('product');
    }
}
