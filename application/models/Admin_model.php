<?php

class Admin_model extends CI_Model {
  public function __construct() {
    parent::__construct();    
    $this->load->database();
    $this->admin_session = $this->session->userdata('backend');
  }
  public function get_category_info($id=null) {
    $this->db->select('*');
    $this->db->from('category');
    if(!is_null($id)) {
      $this->db->where('id', $id);
      $query = $this->db->get();
      return $query->row();
    }
    else {
      $query = $this->db->get();
      return $query->result();
    }
  } 
   public function add_category($categories) {
    $categories           = $this->db->insert('category', $categories);
    return $categories;
  }
  public function get_product_info($id=null) {
    $this->db->select('*');
    $this->db->from('products');
    if(!is_null($id)) {
      $this->db->where('id', $id);
      $query = $this->db->get();
      return $query->row();
    }
    else {
      $query = $this->db->get();
      return $query->result();
    }
  } 
   public function add_product($products) {
    $products           = $this->db->insert('products', $products);
    return $products;
  }
    /*****************************************************************
  **************** Edit a products  *************************
  ******************************************************************/ 
   public function edit_products($id,$products) {
    $this->db->where('id',$id);
    $this->db->update('products',$products); 
    $this->db->affected_rows();
    return TRUE;
  }
   /*****************************************************************
  **************** Delete a products  *************************
  ******************************************************************/ 

  public function delete($id) {
    $this->db->reset_query();
    $this->db->where('id',$id);
    $this->db->delete('products');
    return true;
  }
}
