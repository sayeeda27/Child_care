
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
    
    <header>
        <div class="header-area ">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-xl-3 d-flex align-items-center">
                  <div class="logo">
                    <a href="<?php echo site_url('Pages/home') ?>"><h3>Immunize <span>Bangladesh</span></h3></a>
                  </div>
                 </div>
                 <div class="col-xl-9">
                   <div class="main-menu float-right">
                     <nav>
                        <ul>
                            <li><a href="<?php echo site_url('Pages/home') ?>">Home</a></li>
                            <li><a href="<?php echo site_url('Pages/feature') ?>">About Us</a></li>
                            <li><a href="<?php echo site_url('Pages/news') ?>">News</a></li>
                            <li><a href="<?php echo site_url('Pages/service') ?>">Services</a></li>
                            <li>
                              <div class="dropdown dropdown-item-text ">
                                <a class=" drop-btn drop_icon" href="#"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                                aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                                </a>

                                <div class="dropdown-menu drop_item" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="<?php echo site_url('Admin_login/index');?>">Admin Login</a>
                                  <a class="dropdown-item" href="<?php echo site_url('Login/index'); ?>">User Login</a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="dropdown dropdown-item-text ">
                                <a class=" drop-btn drop_icon" href="#"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                                aria-expanded="false">
                                <i class="fas fa-align-justify"></i>
                                </a>

                                <div class="dropdown-menu drop_item" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="<?php echo site_url('Pages/vaccine') ?>">EPI Vaccine</a>
                                  <a class="dropdown-item" href="<?php echo site_url('Pages/feature') ?>">About us</a>
                                  <a class="dropdown-item" href="<?php echo site_url('Pages/news') ?>">News</a>
                                  <a class="dropdown-item" href="<?php echo site_url('Pages/service')?>">Services</a>
                                </div>
                              </div>
                            </li>
                        </ul>
                        
                     </nav>
                     
                   </div>
                 </div>
              </div>
           </div>
        </div>
    </header>
