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
          <li class="nav-item ">
              <a href="services.php" class="nav-link">Services </a>
          </li>
          <li class="nav-item active">
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
          <h1 style="font-weight: 900;color:#20a7db; " class="display-4">Read Our Blog</h1>
          <p class="lead" style="font-size: 30px; font-weight: 500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, ea.</p>
        </div>
      </div>
    </div>
  </header>

  <section id="blog" class="blog-2 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card-columns">
            <div class="card">
              <img src="http://lorempixel.com/500/500/city/1" alt="" class="card-img-top img-fluid">
              <div class="card-block">
                <h4 class="card-title">Blog Post One</h4>
                <small class="text-muted">Written by <strong> Jeff </strong> | 07/10 | Dental</small>
                <hr>
                <p class="card-text lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nihil atque alias totam, nostrum vitae, voluptas libero veritatis illo nemo dignissimos dolore, dolorum in voluptatum perspiciatis molestiae perferendis cupiditate facere!</p>
              </div>
            </div>
            <div class="card p-3">
              <blockquote class="card-block card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor laudantium optio natus, aperiam magni animi?</p>
                <footer>
                  <small class="text-muted">
                    Someone Famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
            <div class="card">
              <img src="http://lorempixel.com/500/500/city/2" alt="" class="card-img-top img-fluid">
              <div class="card-block">
                <h4 class="card-title">Blog Post Two</h4>
                <small class="text-muted">Written Written by <strong> john </strong> | 07/10 | Dental</small>
                <hr>
                <p class="card-text lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nihil atque alias totam, nostrum vitae, voluptas libero veritatis illo nemo dignissimos dolore, dolorum in voluptatum perspiciatis molestiae perferendis cupiditate facere!</p>
              </div>
            </div>
            <div class="card p-3">
              <blockquote class="card-block card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor laudantium optio natus, aperiam magni animi?</p>
                <footer>
                  <small>
                    Someone Famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
            <div class="card">
              <img src="http://lorempixel.com/500/500/city/1" alt="" class="card-img-top img-fluid">
              <div class="card-block">
                <h4 class="card-title">Blog Post One</h4>
                <small class="text-muted">Written by Written by <strong> Jeff </strong> | 07/10 | Dental</small>
                <hr>
                <p class="card-text lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nihil atque alias totam, nostrum vitae, voluptas libero veritatis illo nemo dignissimos dolore, dolorum in voluptatum perspiciatis molestiae perferendis cupiditate facere!</p>
              </div>
            </div>
            <div class="card p-3">
              <blockquote class="card-block card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor laudantium optio natus, aperiam magni animi?</p>
                <footer>
                  <small class="text-muted">
                    Someone Famous in <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
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
  
