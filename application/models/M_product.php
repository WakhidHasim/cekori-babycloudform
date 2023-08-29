<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_product extends CI_Model
{
    var $table = 'product';
    var $column_order = ['kode_bcf', 'tgl_jual'];
    var $order = ['kode_bcf', 'tgl_jual'];
    public function countProducts()
    {
        return $this->db->get($this->table)->num_rows();
    }

    private function _getDataQuery()
    {
        $this->db->from($this->table);

        if (isset($_POST['search']['value'])) {
            $this->db->like('kode_bcf', $_POST['search']['value']);
            $this->db->or_like('tgl_jual', $_POST['search']['value']);
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('kode_bcf', 'DESC');
        }
    }

    public function getProducts()
    {
        $this->_getDataQuery();

        if ($_POST['length'] !== -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }

        $query = $this->db->get();
        return $query->result();
    }


    public function countFilteredData()
    {
        $this->_getDataQuery();
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

    public function getDataById($kode_bcf)
    {
        return $this->db->get_where($this->table, ['kode_bcf' => $kode_bcf])->row();
    }

    public function editProduct($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
}
