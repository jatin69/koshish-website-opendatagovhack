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
                            <h2>Join Our Crusade!!</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Join Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#Page header-->

         <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                            ‘Give Happiness to Get Happiness’</h3>
                            <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                               Cheers!! Take a bow, you are doing well in life. To help others becomes an asset to the nation, join us !!  Impart knowledge to the younger generation and help them broom.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                            ‘Knowledge is the key’</h3>
                            <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">

                               If you would like to join us, fill up the form below and attach your resume.
                                We'll contact you for further details.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <br><br><br>

        <section id="blog-full-width">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal" action="sendcareer.php" id="studentform" method="POST" enctype="multipart/form-data" onsubmit="return validate(this)" >
                        <!-- name -->
                        <div  class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><label class="col-sm-2 control-label">Name*</label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" placeholder="Enter your Full name" class="form-control">
                            </div>
                        </div>
                        <!-- gender -->
                        <div  class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".4s""><label class="col-sm-2 control-label">Gender*</label>
                            <div class="col-sm-10">
                                <div class="radio"><label><input type="radio" name="gender" value="male" id="male" checked>Male</label></div>
                                <div class="radio"><label><input type="radio" name="gender" value="female" id="female" >Female</label></div>
                                <div class="radio"><label><input type="radio" name="gender" value="other" id="other">Other</label></div>
                            </div>
                        </div>
                        <!-- dob -->
                        <div  class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s""><label class="col-sm-2 control-label">Date of Birth*</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="dob" name="dob">
                            </div>
                        </div>
                        <!--email -->
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s""><label class="col-sm-2 control-label">Email*</label>
                            <div class="col-sm-10"><input type="email" id="email" name="email" placeholder="Enter you work Email" class="form-control"></div>
                        </div>
                        <!--contact -->
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s""><label class="col-sm-2 control-label">Contact No.*</label>
                            <div class="col-sm-10"><input type="tel" id="contact" name="contact" placeholder="Enter your work contact No." class="form-control"></div>
                        </div>
                        <!--address -->
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s""><label class="col-sm-2 control-label">Address*</label>
                            <div class="col-sm-10">
                                <textarea rows="5" id="address" name="address" placeholder="Enter your Complete adrress" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- city -->
                        <div  class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><label class="col-sm-2 control-label">City*</label>
                            <div class="col-sm-10">
                                <input type="text" id="city" name="city" placeholder="Enter your city/village" class="form-control">
                            </div>
                        </div>

                        <!-- district -->
                        <div  class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><label class="col-sm-2 control-label">District*</label>
                            <div class="col-sm-10">
                                <input type="text" id="district" name="district" placeholder="Enter your district" class="form-control">
                            </div>
                        </div>

                         <!-- State -->
                        <div  class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><label class="col-sm-2 control-label">State*</label>
                            <div class="col-sm-10">
                                <input type="text" id="state" name="state" placeholder="Enter your State" class="form-control">
                            </div>
                        </div>
                        <!-- pincode -->
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s""><label class="col-sm-2 control-label">Pincode*</label>
                            <div class="col-sm-10">
                                <input type="Number" id="pincode" name="pincode" placeholder="Enter your pincode" class="form-control">
                            </div>
                        </div>
                        <!-- Qualifications -->
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".9s""><label class="col-sm-2 control-label">Qualification*</label>
                            <div class="col-sm-10">
                                <textarea rows="2" id="qualification" name="qualification" placeholder="Enter your qualifications" class="form-control"></textarea>
                            </div>
                        </div>

                        <br><hr><br>
                        <!-- Instructions -->
                        <div  class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.1s""><label class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <h3>
                                    Upload you CV-
                                </h3>
                                <h4>
                                   Upload only in .pdf or .doc format. File should be less than 2mb in size.
                                </h4>

                            </div>
                        </div>

                        <!-- file-->
                        <div  class="form-group"><label class="col-sm-2 control-label">Select CV File</label>
                            <div class="col-sm-10 custom-file ">
                                <input type="file" id="fileToUpload" name="fileToUpload" class="custom-file-input" required>
                            </div>
                        </div>
                        <br>
                        <div  class="form-group"><label class="col-sm-2 control-label"></label>
                            <div class="col-lg-12 text-center ">
                                <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit"> SUBMIT </button>
                            </div>
                        </div>
                    </form>
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

        <script>
            /* error and focus*/
            function validate() {
                $('#name').parent().parent().removeClass('has-error');
                $('#email').parent().parent().removeClass('has-error');
                $('#gender').parent().parent().removeClass('has-error');
                $('#dob').parent().parent().removeClass('has-error');
                $('#contact').parent().parent().removeClass('has-error');
                $('#address').parent().parent().removeClass('has-error');
                $('#city').parent().parent().removeClass('has-error');
                $('#district').parent().parent().removeClass('has-error');
                $('#state').parent().parent().removeClass('has-error');
                $('#qualification').parent().parent().removeClass('has-error');
                $('#fileToUpload').parent().parent().removeClass('has-error');

                var name = $('#name').val();
                var email = $('#email').val();
                var gender = $('input[name=gender]:checked').val();
                var dob = $('#dob').val();
                var contact = $('#contact').val();
                var address = $('#address').val();
                var city = $('#city').val();
                var district = $('#district').val();
                var state = $('#state').val();
                var state = $('#pincode').val();
                var qualification=$('#qualification').val();

                var emailreg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var mobreg = /^(\+91-|\+91|0)?\d{10}$/;

                if (!name) {
                    alert("Please enter a valid Name.");
                    $('#name').parent().parent().addClass('has-error');
                    $('#name').focus();
                    return false;
                } else if (!dob) {
                    alert("Please enter a valid Date of birth");
                    $('#dob').parent().parent().addClass('has-error');
                    $('#dob').focus();
                    return false;
                }
                else if (!email || !emailreg.test(email)) {
                    alert("Please enter a valid Email address");
                    $('#email').parent().parent().addClass('has-error');
                    $('#email').focus();
                    return false;
                }
                else if (!contact || !mobreg.test(contact)) {
                    alert("Please enter a valid contact Number.");
                    $('#contact').parent().parent().addClass('has-error');
                    $('#contact').focus();
                    return false;
                }
                else if (!address) {
                    alert("Please enter a valid Address.");
                    $('#address').parent().parent().addClass('has-error');
                    $('#address').focus();
                    return false;
                }
                else if (!city) {
                    alert("Please enter a valid city.");
                    $('#city').parent().parent().addClass('has-error');
                    $('#city').focus();
                    return false;
                }else if (!district) {
                    alert("Please enter a valid district.");
                    $('#district').parent().parent().addClass('has-error');
                    $('#district').focus();
                    return false;
                }else if (!address) {
                    alert("Please enter a valid state.");
                    $('#state').parent().parent().addClass('has-error');
                    $('#state').focus();
                    return false;
                }else if (!pincode) {
                    alert("Please enter a valid pincode.");
                    $('#pincode').parent().parent().addClass('has-error');
                    $('#pincode').focus();
                    return false;
                }
                else if (!qualification) {
                    alert("Please enter your qualifications");
                    $('#qualification').parent().parent().addClass('has-error');
                    $('#qualification').focus();
                    return false;
                }

            }

        </script>

    </body>
</html>
