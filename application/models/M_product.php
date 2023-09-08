<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_product extends CI_Model
{
    var $table = 'product';
    var $order = ['kode_bcf', 'tgl_jual'];

    private function _getProductsQuery()
    {
        $this->db->from($this->table);

        if (isset($_POST['search']['value'])) {
            $this->db->like('kode_bcf', $_POST['search']['value']);
            $this->db->or_like('tgl_jual', $_POST['search']['value']);
        }

        $this->db->order_by('kode_bcf', 'desc');
    }
    public function getProducts()
    {
        $this->_getProductsQuery();

        if ($_POST['length'] !== -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function countFilteredData()
    {
        $this->_getProductsQuery();

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countAllData()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function addProduct($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    public function importCSV($file_path)
    {
        $delimiter = ',';
        $enclosure = '"';
        $escape = '\\';

        if (($handle = fopen($file_path, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle, 10000, $delimiter, $enclosure, $escape)) !== FALSE) {
                $data = array(
                    'kode_bcf' => $row[0],
                    'tgl_jual' => date('Y-m-d', strtotime($row[1]))
                );

                $this->db->insert($this->table, $data);
            }
            fclose($handle);
            return true;
        } else {
            return false;
        }
    }
}
