<?php

class Products_model extends CI_Model {


  public function get_products($products_id) {
    if($products_id != '') {
      $this->db->select('*');
      $this->db->from('products');
      $this->db->where('id', $products_id);
      $query = $this->db->get();
      return $query->row_array();
    }
    return array();
  }
}
