<div class="reg-area text-center mb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="reg-title text-center">
            <h3>SignUp</h3>
        </div>
      </div>
    </div>
     <div class="log-form">
        <form method="post" action="<?php echo base_url();?>Welcome/validation">
               <input type="text" class="form-control" name="user_name" placeholder="user name" value="<?php echo set_value('user_name');?>">
                <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                <input type="text" class="form-control" name="user_email" placeholder="user email" value="<?php echo set_value('user_email');?>">
                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                <input type="password" class="form-control" name="user_password" placeholder="user password" value="<?php echo set_value('user_password');?>">
                <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                <button type="submit" name ="register" value="Welcome" 
                class="btn" >Signup</button>
                
        </form>
     </div>
  </div>
</div>