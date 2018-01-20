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
          <p class="lead" style="font-size: 30px; font-weight: 500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, ea.</p>
        </div>
      </div>
    </div>
  </header>

  
  <!-- sercives Section -->

  <section class="services-full">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="border:none;" >
          <img class="card-img-top img-fluid" src="img/services_!.jpg" alt="Card image cap">
          <div  class="card-body card-body-2">
            <h4 class="card-title display-4">Card title</h4>
            <p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="border:none;" >
          <img class="card-img-top img-fluid" src="img/services_2.jpg" alt="Card image cap">
          <div class="card-body card-body-2">
            <h4 class="card-title display-4">Card title</h4>
            <p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="border:none;">
          <img class="card-img-top img-fluid" src="img/services-3.jpg" alt="Card image cap">
          <div class="card-body card-body-2">
            <h4 class="card-title display-4">Card title</h4>
            <p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
          </div>
        </div>
      </div>
    </div> <!-- end of first row -->
    <hr>
     <div class="row services-full">
      <div class="col-md-4">
        <div class="card" style="border:none;">
          <img class="card-img-top img-fluid" src="img/services-4.jpg" alt="Card image cap">
          <div class="card-body card-body-2">
            <h4 class="card-title display-4">Card title</h4>
            <p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="border:none;">
          <img class="card-img-top img-fluid" src="img/services_2.jpg" alt="Card image cap">
          <div class="card-body card-body-2">
            <h4 class="card-title display-4">Card title</h4>
            <p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="border:none;">
          <img class="card-img-top img-fluid" src="img/services-3.jpg" alt="Card image cap">
          <div class="card-body card-body-2">
            <h4 class="card-title display-4">Card title</h4>
            <p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
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
                    Question One?
                  </a>
                </h5>
              </div>

              <div id="collapseOne" class="collapse">
                <div class="card-block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque laudantium, sint fugiat nobis veritatis, eligendi tempora. Recusandae, quod quibusdam accusamus magnam id aliquam distinctio quaerat maxime. Esse nemo cum architecto.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Question Two?
                  </a>
                </h5>
              </div>

              <div id="collapseTwo" class="collapse">
                <div class="card-block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque laudantium, sint fugiat nobis veritatis, eligendi tempora. Recusandae, quod quibusdam accusamus magnam id aliquam distinctio quaerat maxime. Esse nemo cum architecto.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    Question Three?
                  </a>
                </h5>
              </div>

              <div id="collapseThree" class="collapse">
                <div class="card-block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque laudantium, sint fugiat nobis veritatis, eligendi tempora. Recusandae, quod quibusdam accusamus magnam id aliquam distinctio quaerat maxime. Esse nemo cum architecto.
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
                    Question Four?
                  </a>
                </h5>
              </div>

              <div id="collapseFour" class="collapse">
                <div class="card-block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque laudantium, sint fugiat nobis veritatis, eligendi tempora. Recusandae, quod quibusdam accusamus magnam id aliquam distinctio quaerat maxime. Esse nemo cum architecto.
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
  
