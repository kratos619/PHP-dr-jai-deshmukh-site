<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'include/header_main.php';
include 'dr_details.php';
?>
<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse">
    <div class="container">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <a href="index.php" class="navbar-brand"><span style="color:#20a7db;">Be</span> Dentist</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a href="index.php" class="nav-link">Home </a>
          </li>
          
          <li class="nav-item active">
              <a href="about.php" class="nav-link">About Us </a>
          </li>
          <li class="nav-item ">
              <a href="services.php" class="nav-link">Services </a>
          </li>
          <li class="nav-item">
              <a href="blog.php" class="nav-link">blogs </a>
          </li>
          <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
          <h1 style="font-weight: 900;color:#20a7db; " class="display-2">About Us</h1>
          <p class="lead" style="font-size: 30px; font-weight: 500">Hello, There</p>
        </div>
      </div>
    </div>
  </header>

<?php
if(isset($_GET['full_info'])){
     $selected_dr_id = $_GET['full_info'];
     $selected_dr_name = $dr_deatils[$selected_dr_id]["full_name"];
     $selected_dr_education = $dr_deatils[$selected_dr_id]["education"];
     $selected_dr_hobbies = $dr_deatils[$selected_dr_id]["hobbies"];
     $selected_about_dr = $dr_deatils[$selected_dr_id]["about_dr"];
     $selected_dr_facebooklink = $dr_deatils[$selected_dr_id]["linkfacebook"];
     $selected_dr_twitterlink = $dr_deatils[$selected_dr_id]["linktwitter"];
     $selected_dr_gmaillink = $dr_deatils[$selected_dr_id]["linkgmail"];
     $selected_dr_image = $dr_deatils[$selected_dr_id]["image"];
}
?>
<p class="lead p-4">
    <a href="about.php"> About US > </a> About <?php echo $selected_dr_name; ?>
</p>
<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h4 style="font-weight: 900;color:#20a7db; " class="display-6">Hi... My Name Is <?php echo $selected_dr_name; ?> </h4>
           <p class="text-muted">
              <?php echo $selected_dr_education; ?>
          </p>
          <p class="lead">
              <?php echo $selected_about_dr; ?>
          </p>
           <p class="text-muted">
            Things I love to Do :   <?php echo $selected_dr_hobbies; ?>;
          </p>
        </div>
        <div class="col-md-6">
            <img src="img/<?php echo $selected_dr_image; ?>" alt="" class="hidden-sm-down about-img img-fluid rounded-circle"> 
        </div>
      </div>
    </div>
  </section>

<?php include 'include/footer_main.php'; ?>


