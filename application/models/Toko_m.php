<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_m extends CI_Model {

    public function getkat($namaToko, $some){
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->like('jenis', $some);
        $this->db->like('toko', $namaToko);
        return $this->db->get()->result_array();
    }
    public function getkatAll($namaToko){
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->like('toko', $namaToko);
        return $this->db->get()->result_array();
    }
    
}

