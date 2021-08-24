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
  <center><h2>Welcome to --- Category page</h2></center>
<div class="container" style="padding-top: 100px;"> 
        <div class="row">
         <div class="col-md-12">
          <a href="<?php echo base_url().'admin/add_category'; ?>" class="add-new" role="button" aria-pressed="true">Add New +</a>
            <div class="table-title">
                <div class="row">
                  <div class="col-sm-8"><h2>Category <b>List</b></h2></div>
                </div>
            </div>
          <table id="datatable" class="table table-striped table-bordered table-earning" cellspacing="0" width="100%">
             <thead>
                <tr>
                  <th style="width: 4px;">#</th>
                  <th  >Category Id</th>
                  <th>Category Name <i class="fa fa-sort"></i></th>
                  <th>Category Image</th>
                  <th style="width: 100px;">Description</th>
                </tr>
              </thead>
          <tfoot>
            <tr>
              <th style="width: 4px;">#</th>
              <th>Category Id</th>
              <th>Category Name <i class="fa fa-sort"></i></th>
              <th>Category Image</th>
              <th>Description</th>
            </tr>
          </tfoot>

          <tbody>
            <?php 
            $count = 1;
            $row_class = "";
            foreach ($all_category as $category) {
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
              <td><?php echo $category->id; ?></td>
              <td><?php echo $category->category_name; ?></td>

              <td><img src="<?php echo base_url().'assets/images/category_image/'.$category->category_image;?>"width ="136px" height ="98px" ></td>
               <td><span class="text-limit" style="color: black;">
                      <?php echo $category->description; ?> </span>                 
                    <button class="read-more" id="myBtn" data-toggle="modal" data-target="#exampleModalCenter">
                    Read more
                    </button>
              </td>
              
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
            <h5 class="modal-title" id="exampleModalLongTitle">Category Description</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $category->description; ?>
                
          </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary add-new" data-dismiss="modal">Back</button>
            </div>
         </div>
      </div>
    </div>


</body>
<?php $this->load->view('/includes/footer');?>