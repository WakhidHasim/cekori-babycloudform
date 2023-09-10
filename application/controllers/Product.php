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
        $config['max_size'] = 1024;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('csv_file')) {
            $output['status'] = 'danger';
            $output['message'] = $this->upload->display_errors();
        } else {
            $file_data = $this->upload->data();
            $file_path = './assets/file_csv/' . $file_data['file_name'];

            $import_result = $this->m_product->importCSV($file_path);

            if ($import_result !== false) {
                $output['status'] = 'success';
                $output['message'] = 'CSV data imported successfully.';
            } else {
                $output['status'] = 'danger';
                $output['message'] = 'Failed to import CSV data. Invalid CSV format.';
            }

            unlink($file_path);
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function importExcel()
    {
        $config['upload_path'] = './assets/file_csv/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('excel_file')) {
            $output['status'] = 'danger';
            $output['message'] = $this->upload->display_errors();
        } else {
            $file_data = $this->upload->data();
            $file_path = './assets/file_csv/' . $file_data['file_name'];

            $this->load->library('PHPExcel');
            $objPHPExcel = PHPExcel_IOFactory::load($file_path);

            $worksheet = $objPHPExcel->getActiveSheet();
            $rows = $worksheet->toArray();

            unset($rows[0]);
            $import_data = array();

            foreach ($rows as $row) {
                $kode_bcf = $row[0];
                $tgl_jual = $row[1];

                // Validasi Kolom 'kode_bcf' (Pastikan unik)
                if (!$this->isUniqueKodeBcf($kode_bcf)) {
                    $output['status'] = 'danger';
                    $output['message'] = 'BCF Code is available!';
                    $this->output->set_content_type('application/json')->set_output(json_encode($output));
                    return;
                }

                // Validasi Kolom 'tgl_jual' (Pastikan tanggal yang valid)
                if (!strtotime($tgl_jual)) {
                    $output['status'] = 'danger';
                    $output['message'] = 'Invalid date format';
                    $this->output->set_content_type('application/json')->set_output(json_encode($output));
                    return;
                }

                $import_data[] = array(
                    'kode_bcf' => $kode_bcf,
                    'tgl_jual' => date('Y-m-d', strtotime($tgl_jual))
                );
            }

            $import = $this->db->insert_batch('product', $import_data);
            if ($import) {
                $output['status'] = 'success';
                $output['message'] = 'Excel data imported successfully.';
            } else {
                $output['status'] = 'danger';
                $output['message'] = 'Excel data failed to import.';
            }

            unlink($file_path);
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    private function isUniqueKodeBcf($kode_bcf)
    {
        // Pastikan kode_bcf adalah unik dalam tabel product.
        $query = $this->db->get_where('product', array('kode_bcf' => $kode_bcf));
        return $query->num_rows() == 0;
    }
}
