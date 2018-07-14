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
          
          <li class="nav-item">
              <a href="about.php" class="nav-link">About Us </a>
          </li>
          <li class="nav-item active">
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
  <!-- HEADER SECTION -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
          <h1  style="font-weight: 900;color:#20a7db; " class="display-2">Services</h1>
          <p class="lead" style="font-size: 30px; font-weight: 500">We Provide Following Services</p>
        </div>
      </div>
    </div>
  </header>

  
  <!-- sercives Section -->
<?php
include ('services-details.php');
?>
  <section class="services-full">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="border:none;" >
          <img class="card-img-top img-fluid" src="img/services_!.jpg" alt="Card image cap">
          <div  class="card-body card-body-2">
            <h4 class="card-title text-center"><?php echo $Services[0]["name"];?></h4>
            <p class="card-text lead"><?php echo $Services[0]["about"];?></p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="border:none;" >
          <img class="card-img-top img-fluid service-img" src="img/<?php echo $Services[1]["img"];?>" alt="Card image cap">
          <div class="card-body card-body-2">

              <h4 class="card-title text-center"><?php echo $Services[1]["name"];?></h4>
              <p class="card-text lead"><?php echo $Services[1]["about"];?></p>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="border:none;">
          <img class="card-img-top img-fluid" src="img/<?php echo $Services[2]["img"];?>" alt="Card image cap">
          <div class="card-body card-body-2">

              <h4 class="card-title text-center"><?php echo $Services[2]["name"];?></h4>
              <p class="card-text lead"><?php echo $Services[2]["about"];?></p>

          </div>
        </div>
      </div>
    </div> <!-- end of first row -->
    <hr>
     <div class="row services-full">
      <div class="col-md-4">
        <div class="card" style="border:none;">
          <img class="card-img-top img-fluid" src="img/<?php echo $Services[3]["img"];?>" alt="Card image cap">
          <div class="card-body card-body-2">

              <h4 class="card-title text-center"><?php echo $Services[3]["name"];?></h4>
              <p class="card-text lead"><?php echo $Services[3]["about"];?></p>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="border:none;">
          <img class="card-img-top img-fluid" src="img/<?php echo $Services[4]["img"];?>" alt="Card image cap">
          <div class="card-body card-body-2">

              <h4 class="card-title text-center"><?php echo $Services[4]["name"];?></h4>
              <p class="card-text lead"><?php echo $Services[4]["about"];?></p>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="border:none;">
          <img class="card-img-top img-fluid" src="img/services-3.jpg" alt="Card image cap">
          <div class="card-body card-body-2">

              <h4 class="card-title text-center"><?php echo $Services[5]["name"];?></h4>
              <p class="card-text lead"><?php echo $Services[5]["about"];?></p>

          </div>
        </div>
      </div>
    </div> <!-- end of 2nd row -->
</div>  
	</section>

  <!-- FAQ SECTION -->
  <section id="faq" class="p-5 bg-dark">
    <div class="container">
      <h1 class="text-center">Frequently Asked Questions</h1>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    How Can I Get Appointment?
                  </a>
                </h5>
              </div>

              <div id="collapseOne" class="collapse">
                <div class="card-block">
                You Can Call Us Or Mail Us.. Our Team Always Available For Response...
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Where Is Clinic ?
                  </a>
                </h5>
              </div>

              <div id="collapseTwo" class="collapse">
                <div class="card-block">
                Location.........
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    Are They Have Qualified Doctors?
                  </a>
                </h5>
              </div>

              <div id="collapseThree" class="collapse">
                <div class="card-block">
                Yes... We Have Highly Professional well Qualify Doctors..They all Complete There Education from Recognized And Well Known University
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                    What About Facility's ?
                  </a>
                </h5>
              </div>

              <div id="collapseFour" class="collapse">
                <div class="card-block">
                    We Provide All Kind Facility's with Advance and Safe Equipment
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                    Question Five?
                  </a>
                </h5>
              </div>

              <div id="collapseFive" class="collapse">
                <div class="card-block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque laudantium, sint fugiat nobis veritatis, eligendi tempora. Recusandae, quod quibusdam accusamus magnam id aliquam distinctio quaerat maxime. Esse nemo cum architecto.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                    Question Six?
                  </a>
                </h5>
              </div>

              <div id="collapseSix" class="collapse">
                <div class="card-block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque laudantium, sint fugiat nobis veritatis, eligendi tempora. Recusandae, quod quibusdam accusamus magnam id aliquam distinctio quaerat maxime. Esse nemo cum architecto.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php
  // add footer
  include 'include/footer_main.php';
  
