<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Products controller class contains the methods to view
 *
 * @package         Products
 * @video           Controller
 * @author          Rajesh K
 * @link            #
 */
class Products extends BD_Controller {
  

  public function __construct() { 
    parent::__construct(); 
    $this->load->model('api/products_model');

  }
  /**
   * Get the Products  in Product Mangement
   * @param $product_id
   *
   * @return object of products in Product management  
   */
  public function products_details_get($products_id) {      

    try {
      $products = $this->products_model->get_products($products_id);
      if ($products) {

      $results = array('status' => "true",'message' => 'Products Details','data' => $products);
      return $this->response($results);
      }

      $results = array('status' => "false",'message' => 'No products','data' =>(object)array());
      return $this->response($results);
    }
    catch( Exception $e ) {
      log_message( 'error', $e->getMessage( ) . ' in ' . $e->getFile() . ':' . $e->getLine() );
      $results = array('status' => "false",'message' => $e->getMessage(),'data' => array());
      return $this->response($results);
    }  
  }  
}

?>