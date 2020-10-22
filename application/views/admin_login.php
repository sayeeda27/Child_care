<div class="reg-area text-center mb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="reg-title text-center">
            <h3>Admin LogIn</h3>
        </div>
      </div>
    </div>
     <div class="log-form">
<form method="post" action="<?php echo base_url();?>Admin_login/check_login">
    <input type="text" class="form-control" name="admin_email" placeholder="admin email" value="<?php echo set_value('admin_email');?>">
    <span class="text-danger"><?php echo form_error('admin_email'); ?></span>
    <input type="password" class="form-control" name="admin_password" placeholder="admin password" value="<?php echo set_value('admin_password');?>">
    <span class="text-danger"><?php echo form_error('admin_password'); ?></span>
    <button type="submit" name ="login" class="btn" value="Login" >Login</button>
        
</form>
     </div>
  </div>
</div>