<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{

    function tampil_data($where)
    {
        return $this->db->query("select * from product where kode_bcf = '$where'");
    }
}
