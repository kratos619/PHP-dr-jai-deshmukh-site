<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 <!-- NEWSLETTER SECTION -->
    <section id="newsletter" class="text-center p-5 bg-inverse text-white">
        <div class="container">
            <div class="row">

                <div class="col-md-4 mb-4 text-center">
                    <h2><span style="color:#20a7db ;">Be</span>DENTIST</h2>
                    <p class="lead" style="color:darkgray;">
                        BeDentist Dental clinic is here to fix any dental health concern you might have. Our diverse team of professionals and our customer service oriented approach will make you for once feel comfortable while sitting in a dentist's chair!
                    </p>
                </div>

                <div class="col-md-4">
                    <h3>Opening hours</h3>
                    <div class="p-2 item-hl">
                        <i class="fa fa-clock-o news-letter-col-2" aria-hidden="true"></i><span style="color: darkgray">Opening hours:Mon–Fri: 9am–6pm;
                        <br> Sun: 10am–1pm</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <h3>Contact info</h3>
                    <div class="d-flex flex-column row-h1">
                        <div class="p-2 item-hl">
                            <i class="fa fa-phone news-letter-col-2" aria-hidden="true"></i> 5555-555-555
                        </div>
                        <div class="p-2 item-hl "><i class="fa fa-envelope news-letter-col-2" aria-hidden="true"></i> Yash@gmail.com
                        </div>
                        <div class="p-2 item-hl ">
                            <i class="fa fa-map-marker news-letter-col-2" aria-hidden="true"></i> Location
                        </div>
                    </div>
                </div>

                <!--
        <div class="col">
          <h1>Signup For Our Newsletter</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor itaque iure sequi rerum dolorem labore delectus, voluptas ipsa error.</p>
          <form class="form-inline justify-content-center">
            <label class="sr-only" for="name">Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Enter Name">

            <label class="sr-only" for="email">Email</label>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Enter Email">

            <button class="btn btn-primary" type="submit">Submit</button>
          </form>
        </div>
-->
            </div>
        </div>
    </section>

    <footer id="main-footer" class="p-4">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Copyright 2017 &copy; 2017 <span style="color:#20a7db;" >Be</span>Dentist</p>
        </div>
        <div class="col-sm-6 ">
        	<div class="float-right">
                <div class="d-flex flex-row row-hl align-items-end">
                    <a style="color: #20a7db;" class="btn btn-default" href="path/to/settings" aria-label="Settings">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-default" style="color: #20a7db;" href="path/to/settings" aria-label="Settings">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-default" style="color: #20a7db;" href="path/to/settings" aria-label="Settings"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div>
                </div>

          </div>
      </div>
    </div>
  </footer>

    <!-- VIDEO MODAL -->
    <div class="modal fade" id="videoModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal"><span>×</span>
                    </button>
                    <iframe src="" height="350" width="100%" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MODAL -->
 <div class="modal fade" id="contactModal">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
         <button class="close" data-dismiss="modal"><span>&times;</span></button>
       </div>
       <div class="modal-body">
         <form>
           <div class="form-group">
             <label for="name">Name</label>
             <input type="text" class="form-control" id="name">
           </div>
           <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control" id="email">
           </div>
           <div class="form-group">
             <label for="message">Message</label>
             <textarea class="form-control" id="message"></textarea>
           </div>
         </form>
       </div>
       <div class="modal-footer">
         <button class="btn btn-primary btn-block">Submit</button>
       </div>
     </div>
   </div>
 </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
     <script type="text/javascript" src="js/slick.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

