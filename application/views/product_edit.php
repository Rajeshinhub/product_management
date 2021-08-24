

<?php defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('/includes/header');
?>
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card">
            <div class="card-body"> 
              <div class="card-title">
                <h3 class="text-center title-2">Edit Product</h3>
              </div>
        <?php if(isset($products)){?>
          <?php echo form_open_multipart(base_url().uri_string()); ?>
            <fieldset>

              <div class="form-group">
                <label for="inputproduct" class="col-form-label">Product Name</label>
                <input class="form-control" placeholder="Product Name" id="product_name" name="product_name" type="text" value="<?php echo $products->product_name; ?>" autocomplete="off">
                <?php  if(form_error('product_name')) {
                      echo '<div style="color:red; class="product_name_error">'.form_error('product_name').'</div>';
                    } ?>
              </div>
              <div class="form-group">
                <label for="inputsku" class="col-form-label">Sku</label>
                <input class="form-control" placeholder="SKU" id="sku" name="sku" type="text" value="<?php echo $products->sku; ?>" autocomplete="off">
              </div> 
              <div class="form-group">
                <label for="inputprice" class="col-form-label">Price</label>
                <input class="form-control" placeholder="Product Price" id="price" name="price" type="text" value="<?php echo $products->price; ?>" autocomplete="off">
                <?php  if(form_error('price')) {
                      echo '<div style="color:red; class="price_error">'.form_error('price').'</div>';
                }?>
              </div>
              <div class="form-group">
                <label for="image" class="col-form-label">Product Image</label>
                <input type="file" class="form-control-file" name="myfile" id="image" accept="image/jpg,image/png,image/jpeg,image/gif">
                <img src="<?php echo base_url().'assets/images/product_image/'.$products->image;?>" onerror="this.src='<?php echo ASSETS_PATH;?>/images/placeholder.jpg'" width ="200px" height ="auto">
              </div>
              <div class="form-group">
                <label for="inputdescription" class="col-form-label">Description</label>
                <textarea  name="description" name="description" id="description" placeholder="Description" rows="4" cols="77"><?php echo $products->description; ?></textarea>
              
                <?php  if(form_error('description')) {
                      echo '<div style="color:red; class="price_error">'.form_error('description').'</div>';
                }?>
              </div>
              
              
             
              <div class="form-btnsrow">
                <div class="row">
                  <div class="col-6">
                    <div class="back-btns">
                      <a href="<?php echo base_url();?>employee" class="au-btn au-btn-icon read-more">Back</a>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="next-btns">
                      <input type="submit" value="Update" id="edit_employee"  class="au-btn au-btn-icon add-new" />
                    </div>
                  </div>
                </div>
              </div>              
            </fieldset>
          </form>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
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
<?php $this->load->view('/includes/footer');?>    


