<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 $this->load->view('/includes/header');
?>
<style>
body {
    color: #333;
    background: #fafafa;
    font-family: "Patua One", sans-serif;
}

</style>
</head>
<body>
<div class="container-lg">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="contact-form">
                <h1>Add Product</h1>
                  <?php echo form_open_multipart(base_url().uri_string());?> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName">Product Name</label>
                                <input type="text" name="product_name" class="form-control" id="product_name" required>
                                <?php if (form_error('product_name')) { echo '<div style="color:red; class="product_name_error">'.form_error('product_name').'</div>';}?>
                            </div>
                        </div>   
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName">Sku</label>
                                <input type="text" name="sku" class="form-control" id="sku" required>
                                <?php if (form_error('sku')) { echo '<div style="color:red; class="sku_error">'.form_error('sku').'</div>';}?>
                            </div>
                        </div>  
                        <div class="col-sm-6">
                         <div class="form-group">
                                <label for="inputPhone">Product Image</label>
                                 <input type="file"  id="uploadImage" name="myfile" required="true" accept="image/jpg,image/png,image/jpeg,image/gif" onchange="PreviewImage();">
                                      <img id="uploadPreview" class="uploadPic">
                            </div> 
                        </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Category</label>
                          <select class="form-control" name="category[]" id="category" multiple="true">
                            <option value=""> SELECT Category </option>
                             <?php foreach ($all_category as $category)  {?>
                             <option value="<?php echo $category->category_name;?>" <?php echo (set_value('status')=='$category->$category_name') ? 'selected="true"' : '';?>> <?php echo $category->category_name?></option>
                           <?php } ?>
                          </select>
                        </div>
                      </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName">Price</label>
                                <input type="text" name="price" class="form-control" id="Price" required>
                                <?php if (form_error('Price')) { echo '<div style="color:red; class="Price_error">'.form_error('Price').'</div>';}?>
                            </div>
                        </div>   
                                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail">Description</label>
                                <textarea id="description" name="description" rows="4" cols="50" required></textarea>
                                
                                <?php if (form_error('description')) { echo '<div style="color:red; class="description_error">'.form_error('description').'</div>';}?>
                            </div>
                        </div>
                   
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                    <a href="<?php echo base_url().'admin/categories'; ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa  fa-arrow-left"></i>Back</a>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
    oFReader.onload = function (oFREvent) {
      document.getElementById('uploadPreview').style.display="block";
      document.getElementById('uploadPreview').style.height="144px";
      document.getElementById('uploadPreview').style.width="130px";
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
  </script>