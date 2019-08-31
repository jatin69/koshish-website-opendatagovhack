<!--
    using google charts
-->

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
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
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
        <script src="js/jquery.min.js"></script>

        <!-- doing charts -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>




    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->

    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyCaxJWdZkMfbxXT-FlRy13EVatZBuSXI9A'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([


         <?php
echo '["State","Average_literacy_rate"],';
require 'Qconnect.php';
try {
    $sql = "SELECT * FROM koshish.statewise_literacy_rate;";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    $start = 1;
    while ($start < $count) {
        $row = mysqli_fetch_assoc($result);
        echo '["' . $row["state"] . '",' . ($row["average"]) . '],';
        $start = $start + 1;
    }
    $row = mysqli_fetch_assoc($result);
    echo '["' . $row["state"] . '",' . ($row["average"]) . ']';

} catch (Exception $e) {
    $message = '<p>Something went wrong!</p><p>' . $e->getMessage() . '</p>';
}
$conn->close();
?>

        ]);

        var options = {
            region: 'IN',
    displayMode: 'regions',
    resolution: 'provinces',

          backgroundColor: 'transparent',
          datalessRegionColor: 'transparent',
          defaultColor: '#f5f5f5',

     showTooltip: true,
      showInfoWindow: true
    };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);


      }
    </script>



    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        //  ['State', 'Average_literacy_rate'],



        <?php
echo '["State","Average_literacy_rate", { role: \'style\' }],';
require 'Qconnect.php';
try {
    $sql = "SELECT * FROM koshish.statewise_literacy_rate order by average LIMIT 25;";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    $start = 1;
    // $mycolor=",'#FFFFFF'";
    while ($start < $count) {
        $row = mysqli_fetch_assoc($result);
        echo '["' . $row["state"] . '",' . ($row["average"]) . ',\'color: #e5e4e2\'' . '],';
        $start = $start + 1;
    }
    $row = mysqli_fetch_assoc($result);
    echo '["' . $row["state"] . '",' . ($row["average"]) . ',\'color: #e5e4e2\'' . ']';

} catch (Exception $e) {
    $message = '<p>Something went wrong!</p><p>' . $e->getMessage() . '</p>';
}
$conn->close();
?>



        ]);

        var options = {
          chart: {
            title: 'Average Literacy Rate',
            subtitle: 'Literacy Rate Data: 1951-2011',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

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
                            <h2>Literacy Rate analysis</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Analysis</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<section class="company-description">
            <div class="container">
                <div class="row">


                <div id="barchart_material" style="width: 1100px; height: 700px;" ></div>

                </div>
            </div>
        </section>



<!--
        ==================================================
            Company Description Section Start
        ================================================== -->
        <section class="company-description">
            <div class="container">
                <div class="row">


                    <!-- work out this -->
                      <!--Div that will hold the pie chart-->
                <!-- <div id="chart_div" style="height: 500px; width: 500px"></div> -->
                <!-- map of india -- works fine  -->
              < <div id="regions_div" ></div>

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