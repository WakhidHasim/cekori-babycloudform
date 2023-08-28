<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_product extends CI_Model
{
    public function getCountProduct()
    {
        return $this->db->get('product')->num_rows();
    }

    public function getAllProduct()
    {
        $this->db->select('kode_bcf, tgl_jual');
        $this->db->from('product');
        $this->db->order_by('kode_bcf', 'DESC');

        return $this->db->get()->result_array();
    }

    public function addProduct($data)
    {
        $this->db->insert('product', $data);
        return $this->db->affected_rows();
    }

    // public function importProducts($data)
    // {
    //     return $this->db->insert_batch('product', $data);
    // }

    public function getProduct($kode_bcf)
    {
        return $this->db->get_where('product', ['kode_bcf' => $kode_bcf])->row_array();
    }

    public function editProduct($data, $kode_bcf)
    {
        $this->db->update('product', $data, array('kode_bcf' => $kode_bcf));
        return $this->db->affected_rows();
    }

    public function deleteProduct($kode_bcf)
    {
        $this->db->delete('product', array('kode_bcf' => $kode_bcf));
        return $this->db->affected_rows();
    }
}
