<?php
ob_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

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
                        <i class="fa fa-clock-o news-letter-col-2" aria-hidden="true"></i><span style="color: darkgray">Opening hours:Mon–Fri: 1am–9pm;
                        <br> Sun: Closed</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <h3>Contact info</h3>
                    <div class="d-flex flex-column row-h1">
                        <div class="p-2 item-hl">
                            <i class="fa fa-phone news-letter-col-2" aria-hidden="true"></i> 9096160005
                        </div>
                        <div class="p-2 item-hl "><i class="fa fa-envelope news-letter-col-2" aria-hidden="true"></i> Yash@gmail.com
                        </div>
                        <div class="p-2 item-hl ">
                            <i class="fa fa-map-marker news-letter-col-2" aria-hidden="true"></i> Location 
                            <p>Mama Road Dharampeth Nagpur, Maharashtra 440010 India</p>
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
                    <p>Copyright
                        <?php echo date('Y'); ?> <span style="color:#20a7db;">Be</span>Dentist</p>
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
                    <!--<button type="button"  id="myBtn" class="btn btn-primary" >-->
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
                    <?php
        include("include/contactForm.php");
           ?>
                </div>

            </div>
        </div>

    </div>


    <!--Thankx modal-->
    <!--<!-- Button trigger modal -->

    <!--    Launch demo modal-->
    <!--</button>-->

    <!-- Modal -->
    <div class="modal fade" id="thankxModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Thanks</p>
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
    <script src="js/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="js/FormValidationAndAnimation.js"></script>
    </body>

    </html>