<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Welcome controller class contains the methods to view
 *
 * @package         Product managment
 * @video           Controller
 * @author          Rajesh K
 * @link            #
 */
class Admin extends CI_Controller {
  

  public function __construct() { 
    parent::__construct(); 
    $this->load->model('admin_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('upload');

  }
  public function index() {

    $this->load->view('home');
  }
  public function categories() {

   $category['all_category']  = $this->admin_model->get_category_info();
   $this->load->view('category_list',$category);
  }
  public function add_category() {
    $page_data['title'] = 'category';
    if($this->input->method() === 'post') {
      $this->session->set_flashdata('add_form_error', ''); 
      $categories['category_name']        = $this->input->post('category_name');
      $config = [
          'upload_path'   => 'assets/images/category_image',
          'allowed_types' => "gif|jpg|png|jpeg",
          'file_name'     => 'category'.time(),
          'overwrite'     => TRUE
           ];

        if (!is_dir($config['upload_path'])) {
          mkdir($config['upload_path'], 0777, TRUE);
        }
        $this->load->library('upload', $config);
        $this->upload->initialize($config);   
        $pic = $this->upload->do_upload('myfile'); 
        $img_url = $this->upload->data();
        if($pic) {
          $categories['category_image']    = $img_url['file_name'];
        }
      $categories['description']       = $this->input->post('description');
      $categories['status']      = 'active';
      $this->form_validation->set_rules('category_name', 'Category Name','trim|required');
      $this->form_validation->set_rules('description', 'Description','trim|required');
      if ($this->form_validation->run() == FALSE) {
        $this->session->set_tempdata('add_form_error',$this->form_validation->error_array());
        $this->load->view('add_category',$page_data);  
      } else {
        if($this->admin_model->add_category($categories) == TRUE) {
          $this->session->set_flashdata('success_msg', 'Category added successfully!');
          redirect('admin/categories');
        } else {
          $this->session->set_flashdata('add_menu_error','Something went wrong in database');
          $this->load->view('add_category',$page_data);
        }
      } 
    } else {
    $this->load->view('add_category',$page_data);
    }
  } 
   public function products() {

   $products['all_products']  = $this->admin_model->get_product_info();
   $this->load->view('product_list',$products);
  }

  public function add_product() {
    $page_data['all_category']  = $this->admin_model->get_category_info();
    $page_data['title'] = 'Product';
    if($this->input->method() === 'post') {
      $this->session->set_flashdata('add_form_error', ''); 
      $products['product_name']   = $this->input->post('product_name');
      $products['sku']            = $this->input->post('sku');
      $products['price']          = $this->input->post('price');
      $products['description']    = $this->input->post('description');
      $products['category']       = implode(',', $this->input->post('category'));

      
       $config = [
          'upload_path'   => 'assets/images/product_image',
          'allowed_types' => "gif|jpg|png|jpeg",
          'file_name'     => 'products'.time(),
          'overwrite'     => TRUE
           ];

        if (!is_dir($config['upload_path'])) {
          mkdir($config['upload_path'], 0777, TRUE);
        }
        $this->load->library('upload', $config);
        $this->upload->initialize($config);   
        $pic = $this->upload->do_upload('myfile'); 
        $img_url = $this->upload->data();
        if($pic) {
          $products['image']    = $img_url['file_name'];
        }

      $this->form_validation->set_rules('product_name', 'Product Name','trim|required');
      $this->form_validation->set_rules('sku', 'sku','trim|required');
      $this->form_validation->set_rules('description', 'Description','trim|required');
      if ($this->form_validation->run() == FALSE) {
        $this->session->set_tempdata('add_form_error',$this->form_validation->error_array());
        $this->load->view('add_product',$page_data);  
      } else {
        if($this->admin_model->add_product($products) == TRUE) {
          $this->session->set_flashdata('success_msg', 'Product added successfully!');
          redirect('admin/products');
        } else {
          $this->session->set_flashdata('add_menu_error','Something went wrong in database');
          $this->load->view('add_product',$page_data);
        }
      } 
    } else {
    $this->load->view('add_product',$page_data);
    }
  } 
  public function edit_products($id) {
    $page_data['page_title']             = 'products';
    $page_data['products']               = $this->admin_model->get_product_info($id);

    if($this->input->method() === 'post') {
      $_POST['id'] = $id;
      $this->session->set_flashdata('admin_edit_error', '');
      $products_edit['product_name']   = $this->security->xss_clean($this->input->post('product_name'));
      $products_edit['sku']    = $this->security->xss_clean($this->input->post('sku'));
      $products_edit['description']       = $this->security->xss_clean($this->input->post('description'));
      $products_edit['price']       = $this->security->xss_clean($this->input->post('price'));
      
     $config = [
          'upload_path'   => 'assets/images/product_image',
          'allowed_types' => "gif|jpg|png|jpeg",
          'file_name'     => 'product_'.time(),
          'overwrite'     => TRUE
           ];

        if (!is_dir($config['upload_path'])) {
          mkdir($config['upload_path'], 0777, TRUE);
        }
        $this->load->library('upload', $config);
        $this->upload->initialize($config);   
        $pic = $this->upload->do_upload('myfile'); 
        $img_url = $this->upload->data();
        if($pic) {
          $products_edit['image']    = $img_url['file_name'];
        }
      
      $this->form_validation->set_rules('product_name','product_name','trim|required|alpha_numeric_spaces|max_length[100]');
      $this->form_validation->set_rules('price','price','trim|required|alpha_numeric_spaces|max_length[100]');
      $this->form_validation->set_rules('description','description','trim|required');
     
      if ($this->form_validation->run() == FALSE) {
        $this->load->view('product_edit',$page_data);
      } else {
        if($this->admin_model->edit_products($id,$products_edit) == TRUE) {
          $this->session->set_flashdata('success_msg', 'Product details updated successfully');
          redirect(base_url()."admin/products");
        } else {
          $this->session->set_flashdata('admin_edit_error','Something went wrong');
          $this->load->view('product_edit',$page_data);
        }
      }
    }else {
      $this->load->view('product_edit',$page_data);
    }
  }

  public function delete_product($id) {
    $page_data['page_title']             = 'products';
    $page_data['products']              = $this->admin_model->delete($id);
    $this->session->set_flashdata('success_msg', 'Products deleted successfully!');
    redirect('admin/products');
  }
}

?>