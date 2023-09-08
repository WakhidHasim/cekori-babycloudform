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
        $products = $this->m_product->getProducts();
        $data = [];
        $no = $_POST['start'];

        foreach ($products as $product) {
            $row = [];
            $row[] = ++$no;
            $row[] = $product->kode_bcf;
            $row[] = $product->tgl_jual;
            $data[] = $row;
        }

        $output = [
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_product->countAllData(),
            "recordsFiltered" => $this->m_product->countFilteredData(),
            "data" => $data
        ];

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function addProduct()
    {
        $this->_validation();

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

    private function _validation()
    {
        $data = [];
        $data['error_string'] = [];
        $data['input_error'] = [];
        $data['status'] = true;

        if ($this->input->post('kode_bcf') == '') {
            $data['input_error'][] = 'kode_bcf';
            $data['error_string'][] = 'BCF Code Required!';
            $data['status'] = false;
        }

        if ($this->input->post('tgl_jual') == '') {
            $data['input_error'][] = 'tgl_jual';
            $data['error_string'][] = 'Sale Date Required!';
            $data['status'] = false;
        }

        if ($data['status'] === false) {
            echo json_encode($data);
            exit();
        }
    }

    public function importCSV()
    {
        $config['upload_path'] = './assets/file_csv/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 15000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('csv_file')) {
            $output['status'] = 'danger';
            $output['message'] = $this->upload->display_errors();
        } else {
            $file_data = $this->upload->data();
            $file_path = './assets/file_csv/' . $file_data['file_name'];

            $import_result = $this->m_product->importCSV($file_path);

            if ($import_result > 0) {
                $output['status'] = 'success';
                $output['message'] = 'CSV data imported successfully.';
            } else {
                $output['status'] = 'danger';
                $output['message'] = 'Failed to import CSV data.';
            }

            var_dump($output);
            die;

            unlink($file_path);
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
}
