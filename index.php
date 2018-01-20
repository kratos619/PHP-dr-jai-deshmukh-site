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
          <a href="index.php" class="navbar-brand"><span style="color:#20a7db;">Be</span> Dentist</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a href="index.php" class="nav-link">Home </a>
          </li>
          <li class="nav-item">
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
    <!-- SHOWCASE SLIDER -->
    <section id="showcase">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block text-left ">
                            <h1 style="color:#20a7db;font-weight: bolder;" class="display-4">Dr.Yash </h1>
                            <p class="lead" style="color: darkgray; font-size: 25px; font-weight: 800;">Dr. yash's dental clinic welcomes you! Book an Appointment
                            </p>
                            <a href="#" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#contactModal">Book an Appointment</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5 text-left">
                            <h3 class="lead" style="font-size: 30px; font-weight: 900;">We’re always available for customers with emergent dental problems.</h3>
                            <div class="display-4">
                            	<i style="color:#20a7db; font-weight: 900;" class="fa fa-phone" aria-hidden="true"></i><span style="color: white;"> 555-555-555</span>
                            </div>
                            <p class="lead " style="font-size: 27px; font-weight: 900;" >You can easily reach us 24/7 via the phone number below:</p>

                            <a href="#" class="btn btn-primary btn-lg">Call Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-center mb-5">
                            <h1 class="display-2" style="font-weight: 900">Appointments</h1>
                            <p class="lead">Booking an appointment at our dental clinic is as easy as it gets...</p>
                            <p>You will be able to schedule a convenient time for your meeting with our dentists with just 2 clicks!</p>
                            <a href="#" class="btn btn-success btn-lg">Book An Apponitment</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>


    <!-- INFO SECTION -->
    <section id="info" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <h2 style="color:#20a7db ; font-weight: bold; font-size: 40px;" >Welcome to BeDentist</h2>
                    <h4 style="font-weight: bold;color:#20a7db ;">Dental clinic BeDentist welcomes you!</h4>
                    <br>
                    <p>We’re glad you hand your dental health concerns to our skilled hands. We’ll make sure to deliver the best possible healthcare to all our patients! Of course, we always complement our main services with a customer service oriented approach.</p>

                    <p>We sincerely believe that visiting a dentist shouldn’t be a frightening or stressful experience! We provide an equally comfortable experience of relaxation for all our young and adult customers! Also we implement a lot of pain management and anesthesia options.<strong>Everything we do is aimed at making you feel comfortable, while we take care of your oral healthcare!</strong>
                    </p>
                    <p>
                        It includes both local anesthesia for mouth-numbing as well as a sedative anesthesia. Altogether, this helps relief any pain which might occur in the process of treatment. All in all, we’ve got it all under control at our BeDentist dental health clinic.
                    </p>
                    <p>

                        We invite you to explore the information about our dental office on our website! Feel free to read our terms and conditions and all the additional info we have posted here. Once our customer, you will be leaving our dental clinic with a bright, wide smile!
                    </p>
                </div>
                <div class="col-sm-6 hidden-sm-down">
                    <img src="img/macos-high-sierra-stock-5k-9l.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- HOME HEADING SECTION -->
    <section id="home-heading" class="home p-5">
        <div class="dark-overlay">
            <div class="row">
                <div class="col">
                    <div class="container pt-5">
                        <h1 style="height: 72px;">How we can help...</h1>
                        <p class="hidden-sm-down" style="">We offer a wide range of procedures to help you get the perfect smile. Book an Appointment
                        </p>
                        <a href="#" class="btn btn-success btn-lg" style="">Book An Apponitment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOME ICON SECTION -->
    <section id="home-icons" class="py-5">
        <div class="container">
          <div style="padding-bottom: 30px;">
          	<center><h3 class="display-4" style="font-weight: bold;">Why choose the BeDentist clinic?</h3></center>
          </div>

            <div class="row">

                <div class="col-md-4 mb-4 text-center">
                    <div class="book">
                        <i class="fa fa-book mb-2" aria-hidden="true"></i>
                    </div>
                    <h2 style="font-weight: 900;">Easy booking</h2>
                    <p class="lead"  style="font-weight: 500;">Booking an appointment at our dental clinic is as easy as doing 2 clicks!</p>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <div class="book">
                        <i class="fa fa-users  mb-2"></i>
                    </div>
                    <h2  style="font-weight: 900;">Experience</h2>
                    <p class="lead"  style="font-weight: 500;">Combined, our 5 dentists have over half a century of practical experience. They are ready to put it to action for you!</p>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <div class="book">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </div>
                    <h2 style="font-weight: 900;">Best price guarantee</h2>
                    <p class="lead" style="font-weight: 500;">Our reasonable prices made thousands of people smile with a new, beautiful smile, as never before!!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- VIDEO PLAY SECTION -->
    <section id="video-play">
        <div class="dark-overlay">
            <div class="row">
                <div class="col">
                    <div class="container p-5">
                        <a href="#" class="video" data-video="https://www.youtube.com/embed/mW6hFttt_KE" data-toggle="modal" data-target="#videoModal">
                            <i class="fa fa-play"></i>
                        </a>
                        <h1>See What We Do</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
  <section id="gallery" class="py-5">
    <div class="container">
      <h1 class="text-center">Photo Gallery</h1>
      <p class="text-center">Check out our photos</p>
      <div class="row mb-4">
        <div class="col-md-4">
          <a href="http://lorempixel.com/560/560/business/1" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="http://lorempixel.com/400/400/business/1" alt="" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="http://lorempixel.com/560/560/business/2" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="http://lorempixel.com/400/400/business/2" alt="" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="http://lorempixel.com/560/560/business/3" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="http://lorempixel.com/400/400/business/3" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="http://lorempixel.com/560/560/business/4" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="http://lorempixel.com/400/400/business/4" alt="" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="http://lorempixel.com/560/560/business/5" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="http://lorempixel.com/400/400/business/5" alt="" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="http://lorempixel.com/560/560/business/6" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="http://lorempixel.com/400/400/business/6" alt="" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>
PHOTO GALLERY -->
  <?php
  // add footer
  include 'include/footer_main.php';
  
