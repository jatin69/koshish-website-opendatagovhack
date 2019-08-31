<!DOCTYPE html>
<html class="no-js">
  <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>Koshish </title>
        <meta name="description" content="Koshish is an initiative to bring together local tutors.">
        <meta name="keywords" content="Koshish is an initiative to bring together local tutors.">
        <meta name="author" content="Jatin">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">

        <!-- my custom css file -->
        <link rel="stylesheet" href="css/custom.css">

        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- slider js -->
        <script src="js/slider.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
    </head>

    <body>

       <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <div >
                        <a href="index.php" >
                            <h2 style=" font-family: cambria math ; font-style: italic; " > Koshish</h2>
                         <!--   <img src="images/logo.png" alt="">  -->
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">

                            <li> <a href="index.php" >Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Analysis <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="literacy-analysis.php">Literacy Rate </a></li>
                                        <li><a href="enrollment-analysis.php">Enrollment Rate</a></li>
                                        <li><a href="dropout-analysis.php">Drop Out rate</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="joinus.php">Join Us</a></li>
                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>



        <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#page-header-->


        <!--
        ==================================================
            Contact Section Start
        ================================================== -->
        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                Wanna connect with us ?
                                <br>Drop us a message now, we'll get back to you.
                            </p>
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="sendmail.php" role="form">

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Your Name *" class="form-control" name="name" id="name" required>
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="tel" pattern='([\+]?)(\d{2})?[\d]{10}' placeholder="Your Phone number *" class="form-control" name="phone" id="phone" required>
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".9s">
                                        <input type="text" placeholder="Subject *" class="form-control" name="subject" id="subject" required>
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".9s">
                                        <textarea rows="6" placeholder="Message *" class="form-control" name="message" id="message" required></textarea>
                                    </div>


                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- MAP -->
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                            Our Main headquaters are at DUCS
                            </p>
                            <div class="map">

                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14000.210802268504!2d77.19833906977539!3d28.688070099999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd928daadb91%3A0x76aa925fc6e58347!2sDepartment+Of+Computer+Science!5e0!3m2!1sen!2sin!4v1507400673279" width="100%" height="430" frameborder="0" style="border:0" ></iframe>


                            </div>
                        </div>
                    </div>
                </div>

                <!--
                    Address row details
                -->
                <div class="row address-details">
                    <div class="col-md-4">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <i class="ion-ios-location-outline"></i>
                            <h5>
                           DUCS <br>
                           North Campus<br>
                           New Delhi - 110034

                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <i class="ion-ios-email-outline"></i>
                            <h5>koshish.ogdh@gmail.com<br><br></h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <i class="ion-ios-telephone-outline"></i>
                            <h5>+91 99999-11111 <br>+91 11111-99999</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>



  <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">WHAT DO YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                                <h3>You can help too. Join our initiative and help us reform INDIA.</h3>
                                </p>
                                <a href="joinus.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Join Us</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2017</span> . Open Gov Data Hack
                            <br>
                            Team Members : Jatin, Manisha, Priyanka
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="#" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->
    </body>
</html>
