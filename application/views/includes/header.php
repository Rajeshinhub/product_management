<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Product Management</title>
  <!-- External stylesheets -->

  <link rel="stylesheet" href="<?php echo base_url()?>./assets/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- <script src="https//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  </style>
  <script>
    var home_url = "<?php echo base_url().uri_string();?>";
    var base_url = "<?php echo base_url();?>";
  </script>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">


  <!-- Sidebar/menu   w3-metro-light-green-->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:254px;" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-remove"></i>
      </a>
      <img src="<?php echo base_url().'assets/images/logo.jpg'; ?>" style="width:45%;" class="w3-round"><br><br>
    </div>
    <div class="w3-bar-block">
      
      <a href="<?php echo base_url().'admin/categories'; ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-list-alt" aria-hidden="true"></i> Category</a>
      <a href="<?php echo base_url().'admin/products'; ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-product-hunt" aria-hidden="true"></i> Products</a> 
      
    </div>
  </nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
<div>
</div>
</body>
</html>
	
