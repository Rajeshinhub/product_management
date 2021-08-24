<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('/includes/header');
?>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
</style>
<body>
   <center><h2>Welcome to --- Product page</h2></center>
<div class="container" style="padding-top: 100px;"> 
        <div class="row">
         <div class="col-md-12">
          <a href="<?php echo base_url().'admin/add_product'; ?>" class="add-new" role="button" aria-pressed="true">Add New +</a>
            <div class="table-title">
                <div class="row">
                  <div class="col-sm-8"><h2>Product <b>List</b></h2></div>
                </div>
            </div>
          <table id="datatable" class="table table-striped table-bordered table-earning" cellspacing="10" width="100%">
              <thead>
                <tr>
                  <th style="width: 4px;">#</th>
                  <th>Product ID</th>
                  <th>Product Name <i class="fa fa-sort"></i></th>
                  <th>SKU</th>
                  <th>Product Image</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
          <tfoot>
            <tr>
              <th style="width: 4px;">#</th>
                <th>Product ID</th>
                <th>Product Name <i class="fa fa-sort"></i></th>
                <th>SKU</th>
                <th>Product Image</th>
                <th>Category</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
          </tfoot>

          <tbody>
            <?php 
            $count = 1;
            $row_class = "";
            foreach ($all_products as $product) {
            $row_class = "";
            if($count%2 == 0)
            {
            $row_class.= "even";
            }else{
            $row_class.= "odd";
            } 
            ?>
            <tr>
              <td><?php echo $count; ?></td>
              <td><?php echo $product->id; ?></td>
              <td style="text-align: justify; word-wrap: break-word;"><?php echo $product->product_name; ?></td>
              <td><?php echo $product->sku; ?></td>

              <td><img src="<?php echo base_url().'assets/images/product_image/'.$product->image;?>"width ="136px" height ="98px" ></td>
              <td > <?php echo $product->category; ?></td>
              <td><?php echo '₹'. $product->price; ?></td>
             <td><span class="text-limit" style="color: black;">
                  <?php echo $product->description; ?> </span>                 
                <button class="read-more" id="myBtn" data-toggle="modal" data-target="#exampleModalCenter">Read more
                </button>
              </td>
              <td style="display: flex;">
                    <a href="<?php echo base_url().'admin/edit_products/'.$product->id; ?>" class="au-btn au-btn-icon au-btn--blue" style=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp
                    <a href="<?php echo base_url().'admin/delete_product/'.$product->id; ?>" class="au-btn au-btn-icon au-btn--blue" onclick="myFunction()"> <i class="fa fa-trash"></i></a>&nbsp
                          
            </tr>
            <?php $count++;  
            } ?>
         </tbody>
      </table>
    </div>
    </div>
  </div>

  <!-- model -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Product Description</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $product->description; ?>
                
          </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary add-new" data-dismiss="modal">Back</button>
            </div>
         </div>
      </div>
    </div>
</body>
<?php $this->load->view('/includes/footer');?>