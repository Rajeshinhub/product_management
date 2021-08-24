

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
                <h3 class="text-center title-2">Edit Employee</h3>
              </div>
        <?php if(isset($employee)){?>
          <?php echo form_open_multipart(base_url().uri_string()); ?>
            <fieldset>

              <div class="form-group">
                <label for="inputfirstname" class="col-form-label">First Name</label>
                <input class="form-control" placeholder="First Name" id="first_name" name="firstname" type="text" value="<?php echo $employee->first_name; ?>" autocomplete="off">
                <?php  if(form_error('firstname')) {
                      echo '<div style="color:red; class="firstname_error">'.form_error('firstname').'</div>';
                    } ?>
              </div>
              <div class="form-group">
                <label for="inputlastname" class="col-form-label">Last Name</label>
                <input class="form-control" placeholder="Last Name" id="last_name" name="lastname" type="text" value="<?php echo $employee->last_name; ?>" autocomplete="off">
                
              </div> 
              <div class="form-group">
                <label for="inputemail" class="col-form-label">Email</label>
                <input class="form-control" placeholder="Email ID" id="email" name="email" type="text" value="<?php echo $employee->email; ?>" autocomplete="off">
                <?php  if(form_error('email')) {
                      echo '<div style="color:red; class="email_error">'.form_error('email').'</div>';
                }?>
              </div>
              <div class="form-row form-group">
                <div class="col-2">
                  <label for="inputMobile" class="country-num">Mobile</label>
                  <input class="form-control" type="text" value="+91" disabled>
                </div>
                <div class="col">
                  <label for="inputMobile" class="country-num"></label>
                  <input class="form-control number-validation" placeholder="mobile" id="mobile" name="mobile" type="text" value="<?php echo $employee->mobile; ?>" autocomplete="off">
                  <?php  if(form_error('mobile')) {
                        echo '<div style="color:red; class="mobile_error">'.form_error('mobile').'</div>';
                  } ?>
                </div>
              </div>
               <div class="form-group">
                <label for="inputpassword" class="col-form-label">Password</label>
                <input class="form-control" placeholder="password" id="password" name="password" type="password" value="********" autocomplete="off">
                <?php  if(form_error('password')) {
                      echo "<span style='color:red'>".form_error('password')."</span>";
                } ?>
              </div>
              <div class="form-group">
                <label for="profile_pic" class="col-form-label">Profile Picture</label>
                <input type="file" class="form-control-file" name="myfile" id="profile_pic" accept="image/jpg,image/png,image/jpeg,image/gif">
                <img src="<?php echo base_url().'assets/profile_image/'.$employee->profile_img;?>" onerror="this.src='<?php echo ASSETS_PATH;?>/images/placeholder.jpg'" width ="200px" height ="auto">
              </div>
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                  <div class="col-sm-1">
                    <div class="form-check">
                      <input class="form-check-input" <?php echo $employee->gender=="Male"?"checked":'' ?> type="radio" name="gender" id="gridRadios1" value="Male" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Male
                        </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" <?php echo $employee->gender=="Female"?"checked":'' ?> type="radio" name="gender" id="gridRadios2" value="Female">
                        <label class="form-check-label" for="gridRadios2">
                          Female
                        </label>
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="form-group">
                <label for="inputfordob" class="col-form-label">Date Of Birth</label>

                <input class="form-control dob" placeholder="Date Of Birth" id="dob" name="dob" type="date" value="<?php echo $employee->dob; ?>" autocomplete="off">
                <!-- <input class="form-control dob" placeholder="Date Of Birth" id="dob" name="dob" type="date" value="<?php //echo date('Y/m/d',strtotime($employee->dob)); ?>" autocomplete="off"> -->
              </div>
              <div class="form-group">
                <label for="inputaddress" class="col-form-label">Address</label>
                <input class="form-control" placeholder="address" id="address" name="address" type="text" value="<?php echo $employee->address; ?>" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="inputcity" class="col-form-label">City</label>
                <input class="form-control" placeholder="city" id="city" name="city" type="text" value="<?php echo $employee->city; ?>" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="inputdistrict" class="col-form-label">District</label>
                <input class="form-control" placeholder="District" id="district" name="district" type="text" value="<?php echo$employee->district; ?>" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="inputstate" class="col-form-label">State</label>
                <input class="form-control" placeholder="state" id="state" name="state" type="text" value="<?php echo $employee->state; ?>" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="inputzipcode" class="col-form-label">Pincode</label>
                <input class="form-control pincode-validation" placeholder="zipcode" id="zipcode" name="zipcode" type="text" value="<?php echo $employee->zipcode; ?>" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="inputuser_role" class="col-form-label">User Role</label>
                <select class="form-control" placeholder="user_role" id="user_role" name="user_role" type="text" autocomplete="off">
                  <option <?php echo $employee->role==''?'selected':''; ?> value="">Please select a role</option>
                  <option <?php echo $employee->role=='2'?'selected':''; ?> value="2">Sub Admin</option>
                  <option <?php echo $employee->role=='3'?'selected':''; ?> value="3">Supporting Team</option>
                </select>
                <?php  if(form_error('user_role')) {
                  echo '<div style="color:red; class="user_role_error">'.form_error('user_role').'</div>';
                } ?>
              </div>
              <div class="form-group">
                <label for="inputstatus" class="col-form-label">Status</label>
                <select class="form-control" placeholder="status" id="status" name="status" type="text" autocomplete="off">
                  <option <?php echo $employee->status==''?'selected':''; ?> value="">Please select a status</option>
                  <option <?php echo $employee->status=='active'?'selected':''; ?> value="active">Active User</option>
                  <option <?php echo $employee->status=='in_active'?'selected':''; ?> value="inactive">Inactive User</option>
                  <option <?php echo $employee->status=='blocked'?'selected':''; ?> value="blocked">Blocked User</option>
                  <option <?php echo $employee->status=='deleted'?'selected':''; ?> value="deleted">Deleted User</option>
                </select>
              </div>
              <div class="form-btnsrow">
                <div class="row">
                  <div class="col-6">
                    <div class="back-btns">
                      <a href="<?php echo base_url();?>employee" class="au-btn au-btn-icon au-btn--blue" id="admin-back">Back</a>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="next-btns">
                      <input type="submit" value="Update" id="edit_employee"  class="au-btn au-btn-icon au-btn--blue" />
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
<?php $this->load->view('/includes/footer');?>    


