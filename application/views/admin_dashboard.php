<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPI Reminder</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
   
      <div class="admin-panel">
        <div class="logo_sidebar">
        <a href=""><h3>Immunize <span>Bangladesh</span></h3></a> 
        </div>
        <div class="right_area">
            <a href="<?php echo site_url('Admin_login/logout') ?>" class="logout_btn">Logout</a>
        </div>
     </div>
      
    
    
    <!--sidebar start-->
    <div class="sidebar">
      <div class="admin">
        <div class="admin_info">
            <i class="fas fa-user-alt"></i>
            <h4>Admin</h4>
        </div>
        <a href="#"><i class="fas fa-desktop"></i><span>  Dashboard</span></a>
        <a href="<?php echo site_url('Admin_crud/index') ?>">Registerd baby</a>
        <a href="<?php echo site_url('Pages/alert') ?>">Send alert sms</a>
        <a href="#">Update news</a>
        </div>
    </div>
    <!--sidebar end-->

    <div class="content " style="background-image:url('<?php echo base_url();?>assets/img/admin.jpg');" >
      <div class="admin">

      <div class="card">
        <h2>Admin panel </h2>
        <p>Mannage you website from here</p>
      </div>
    </div>
    
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.min.js" ></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js" ></script>
</body>
</html>