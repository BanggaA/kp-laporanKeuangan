<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic extends CI_Model {
  
  public function getAll($table)
  {
    return $this->db->get($table)->result_array();
  }
  
  public function count($table){
    return $this->db->count_all('$table');
  }

  public function getById($table, $id)
  {
    return $this->db->get_where($table, ['id' => $id])->row_array();
  }

  public function add($table, $data)
  {
    return $this->db->insert($table, $data);
  }
  
  public function update($colId,$id, $table, $data)
  {
    $this->db->where($colId, $id);
    return $this->db->update($table, $data);
  }

  public function delete($colId,$id, $table)
  {
    $this->db->where($colId, $id);
    return $this->db->delete($table);
  }

  public function getJoin($tb_asal,$tb_tujuan,$meet){
    $this->db->select('*');
    $this->db->from($tb_asal);
    $this->db->join($tb_tujuan, $meet);
    return $this->db->get()->result_array();
  }

  
}