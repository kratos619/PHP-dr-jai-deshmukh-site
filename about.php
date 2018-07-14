<?php
// add header
include 'include/header_main.php'; 
?>
<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse">
    <div class="container">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <a href="index.php" class="navbar-brand"> <img src="img/JDlogo.jpeg" height="70" width="70" alt="logo"> Doctor <span style="color:#20a7db;">JD</span></a>
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
<?php
// add dr details
include 'dr_details.php'; ?>
  <!-- HEADER SECTION -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 text-center about-us-heading">
          <h1 style="font-weight: 900;color:#20a7db; " class="display-2">About Us</h1>
          <p class="lead" style="font-size: 30px; font-weight: 500">Who we Are</p>
        </div>
      </div>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h4 style="font-weight: 900;color:#20a7db; " class="display-6">Our dental clinic has been founded in 2010. The founder is an honorable alumni of </h4>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus tempora facilis commodi eum. Culpa harum incidunt corporis explicabo consequatur. Dolorem rem eius ipsam quo voluptate maxime, eaque. Necessitatibus, ut.</p>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus tempora facilis commodi eum. Culpa harum incidunt corporis explicabo consequatur. Dolorem rem eius ipsam quo voluptate maxime, eaque. Necessitatibus, ut.</p>
        </div>
        <div class="col-md-6">
          <img src="img/slide_img_three.jpeg" alt="" class="hidden-sm-down about-img img-fluid rounded-circle">
        </div>
      </div>
    </div>
  </section>
  
  <!--dr section-->
<section id="authors" class="my-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="info-header mb-5">
          <h1 class="text-primary pb-3">
            Medical Team
          </h1>
            <p class="lead pb-3"> We Have Very Professional And Qualifide Medical Team </p>
        </div>

        <div class="row pt-3">
  
        
<?php
  // inside dr details  loop
      //foreach ( $dr_deatils as $key => $value ) {
//    echo $dr_deatils[0]["first-name"];
      //}
?>
          <div class="col-lg-3 col-md-6 col-sm-12 py-5">
            <div class="card">
                <img src="img/<?php echo $dr_deatils[0]["image"]; ?>" alt="" class="img-fluid rounded-circle w-50 mb-3">
             <a href="dr_full_info.php?full_info=<?php echo $dr_deatils[0]["id"]; ?>"><h4 style="color:black;">Dr. <?php echo $dr_deatils[0]["full_name"]; ?></h4></a>
              
              <p><?php echo $dr_deatils[0]["about_dr"]; ?></p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[0]["linkfacebook"]; ?>"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[0]["linktwitter"]; ?>"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[0]["linkgmail"]; ?>"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12 py-5">
            <div class="card">
                <img src="img/<?php echo $dr_deatils[1]["image"]; ?>" alt="" class="img-fluid rounded-circle w-50 mb-3">
             <a href="dr_full_info.php?full_info=<?php echo $dr_deatils[1]["id"]; ?>"><h4 style="color:black;">Dr. <?php echo $dr_deatils[1]["full_name"]; ?></h4></a>
              
              <p><?php echo $dr_deatils[1]["about_dr"]; ?></p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[1]["linkfacebook"]; ?>"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[1]["linktwitter"]; ?>"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[1]["linkgmail"]; ?>"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12 py-5">
            <div class="card">
                <img src="img/<?php echo $dr_deatils[2]["image"]; ?>" alt="" class="img-fluid rounded-circle w-50 mb-3">
             <a href="dr_full_info.php?full_info=<?php echo $dr_deatils[2]["id"]; ?>"><h4 style="color:black;">Dr. <?php echo $dr_deatils[2]["full_name"]; ?></h4></a>
              
              <p><?php echo $dr_deatils[2]["about_dr"]; ?></p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[2]["linkfacebook"]; ?>"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[2]["linktwitter"]; ?>"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[2]["linkgmail"]; ?>"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12 py-5">
            <div class="card">
                <img src="img/<?php echo $dr_deatils[3]["image"]; ?>" alt="" class="img-fluid rounded-circle w-50 mb-3">
                <a href="dr_full_info.php?full_info=<?php echo $dr_deatils[3]["id"]; ?>"><h3 style="color:black;">Dr. <?php echo $dr_deatils[3]["full_name"]; ?></h3></a>
              
              <p><?php echo $dr_deatils[3]["about_dr"]; ?></p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[3]["linkfacebook"]; ?>"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[3]["linktwitter"]; ?>"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="<?php echo $dr_deatils[3]["linkgmail"]; ?>"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
            
                  
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- ICON
  <section id="icon-boxes" class="p-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card card-inverse card-danger text-center text-white">
            <div class="card-block">
              <i class="fa fa-building"></i>
              <h3>Lorem ipsum</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, enim.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-inverse card-danger text-center text-white">
            <div class="card-block">
              <i class="fa fa-bullhorn"></i>
              <h3>Lorem ipsum</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, enim.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-inverse card-danger text-center text-white">
            <div class="card-block">
              <i class="fa fa-comments"></i>
              <h3>Lorem ipsum</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, enim.
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="card card-inverse card-danger text-center text-white">
            <div class="card-block">
              <i class="fa fa-clock-o"></i>
              <h3>Lorem ipsum</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, enim.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-inverse card-danger text-center text-white">
            <div class="card-block">
              <i class="fa fa-cc"></i>
              <h3>Lorem ipsum</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, enim.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-inverse card-danger text-center text-white">
            <div class="card-block">
              <i class="fa fa-coffee"></i>
              <h3>Lorem ipsum</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, enim.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   BOXES -->

  <!-- TESTIMONIALS SLIDER -->
  <section id="testimonial-section" class="p-4 bg-inverse text-white">
    <div class="container">
      <h2 style="font-weight: 900;color:#20a7db; " class="text-center">
        Testimonials
      </h2>
      <div class="row">
        <div class="col">
          <div class="slider">
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">Very professional and gentle. The staff is very accommodating and the office is very stunning and clean </p>
                <footer class="blockquote-footer">Shubham Palaspagar For <small><cite title="Company 1"> Dental treatment</cite></small> </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">Best dental clinic n highly experienced doctor.</p>
                <footer class="blockquote-footer">dheeraj sumesan <small><cite title="Company 1"> Dental treatment</cite></small></footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">Good faculties,nd very friendly behavior</p>
                <footer class="blockquote-footer">Rohit Tijare For <small><cite title="Company 1"> Dental treatment</cite></small></footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <?php
  // add footer
  include 'include/footer_main.php';
  
