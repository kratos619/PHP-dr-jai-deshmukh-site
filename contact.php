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
          <li class="nav-item ">
              <a href="services.php" class="nav-link">Services </a>
          </li>
          <li class="nav-item">
              <a href="blog.php" class="nav-link">blogs </a>
          </li>
          <li class="nav-item active">
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
          <h1 style="font-weight: 900;color:#20a7db; " class="display-4" >Contact Us</h1>
          <p class="lead" style="font-size: 30px; font-weight: 500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, ea.</p>
        </div>
      </div>
    </div>
  </header>

  <section id="contact" class="p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-block">
              <h4>Get In Touch</h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <h4>Address</h4>
              <p class="lead">550 Main st, Mumbai MH</p>
              <h4>Email</h4>
              <p class="lead">test@test.com</p>
              <h4>Phone</h4>
              <p class="lead">111-222-5555</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card p-4">
            <div class="card-block">
              <h3 class="text-center">Please fill out this form to contact us</h3>
              <hr>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><?php
//              $submit = filter_input(INPUT_POST, "submit");
//              if(isset($submit)){
//                 $firsstname = filter_input(INPUT_POST, "firstname");
//                 $lastname = filter_input(INPUT_POST, "lastname");
//                 $email = filter_input(INPUT_POST, "email");
//                 $cnumber = filter_input(INPUT_POST, "cnumber");
//                 $date = filter_input(INPUT_POST, "date");
//                 $message = filter_input(INPUT_POST, "message");
//
//                 //validations
//                 if(empty($firsstname) and empty($lastname) and empty($email) and empty($cnumber) and empty($date)){
//                     echo "Required filed cant be empty";
//                 }else{
//
//                     echo "We Inform Y ou Shortly";
//                 }
//
//
//              }
//
              ?>    
            
              <div class="row">
                <div class="col-md-6">
                    <label>First Name</label>
                  <div class="form-group">
                      <input type="text" name="firstname" class="form-control" id="first_name" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6">
                    <label>Last Name</label>
                  <div class="form-group">
                      <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                    <label>Email</label>
                  <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                    <label>Contact Number</label>
                  <div class="form-group">
                      <input type="tel" name="cnumber" class="form-control" placeholder="Phone Number">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label>Select Date</label>
                  <div class="form-group">
                      <input type="date" name="date" class="form-control" placeholder="Last Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <label>Message</label>
                  <div class="form-group">
                      <textarea name="message" class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <input type="submit" name="submit" class="btn btn-outline-danger btn-block" value="Submit">
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="map">
    	<div class="container-fluid">
    		<div class="row">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15064.818387150359!2d72.9644533!3d19.2734669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1515462409358" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    		</div>
    	</div>
    </section>

  <!-- STAFF SECTION -->
  <section id="staff" class="py-5 text-center bg-inverse text-white">
    <div class="container">
      <h1 style="color:#20a7db;">Our Staff</h1>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Jane Doe</h4>
          <small>Post</small>
        </div>
        <div class="col-md-3">
          <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Jane Doe</h4>
          <small>Post</small>
        </div>
        <div class="col-md-3">
          <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>John Doe</h4>
          <small>Post</small>
        </div>
        <div class="col-md-3">
          <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Jone Doe</h4>
          <small>Post</small>
        </div>
      </div>
    </div>
  </section>

   <?php
  // add footer
  include 'include/footer_main.php';
  
