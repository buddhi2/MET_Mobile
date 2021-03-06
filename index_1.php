<?php
include('connection/connection_mobile.php');

$lat = $_GET['lat'];
$lon = $_GET['lon'];
$day = $_GET['d'];
$sql_t_max = "select * from t_max_10day order by ABS(LAT-($lat)) , ABS(LON-($lon)) limit 1";
$result_t_max = mysqli_query($con, $sql_t_max);

    $row_t_max = mysqli_fetch_assoc($result_t_max);
        		
		$max_temp_array = [$row_t_max['Day1'],
		$row_t_max['Day2'],
		$row_t_max['Day3'],
		$row_t_max['Day4'],
		$row_t_max['Day5'],
		$row_t_max['Day6'],
		$row_t_max['Day7'],
		$row_t_max['Day8'],
		$row_t_max['Day9']
                    ];

$sql_t_min = "select * from t_min_10day order by ABS(LAT-($lat)) , ABS(LON-($lon)) limit 1";
$result_t_min = mysqli_query($con, $sql_t_min);

    $row_t_min = mysqli_fetch_assoc($result_t_min);
        		
		$min_temp_array = [$row_t_min['Day1'],
		$row_t_min['Day2'],
		$row_t_min['Day3'],
		$row_t_min['Day4'],
		$row_t_min['Day5'],
		$row_t_min['Day6'],
		$row_t_min['Day7'],
		$row_t_min['Day8'],
		$row_t_min['Day9']
                    ];

$sql_lf = "select * from lf_10day order by ABS(LAT-($lat)) , ABS(LON-($lon)) limit 1";
$result_lf = mysqli_query($con, $sql_lf);

    $row_lf = mysqli_fetch_assoc($result_lf);
        		
		$lf_array = [$row_lf['Day1'],
		$row_lf['Day2'],
		$row_lf['Day3'],
		$row_lf['Day4'],
		$row_lf['Day5'],
		$row_lf['Day6'],
		$row_lf['Day7'],
		$row_lf['Day8'],
		$row_lf['Day9']
                    ];
					
					
$sql_rf_24h = "select * from rf_24h order by ABS(lati-($lat)) , ABS(longi-($lon)) limit 1";
$result_rf_24h = mysqli_query($con, $sql_rf_24h);

    $row_rf_24h = mysqli_fetch_assoc($result_rf_24h);
        		
		$rf_24h_array = [$row_rf_24h['d1'],
		$row_rf_24h['d2'],
		$row_rf_24h['d3'],
		$row_rf_24h['d4'],
		$row_rf_24h['d5'],
		$row_rf_24h['d6'],
		$row_rf_24h['d7'],
		$row_rf_24h['d8'],
		$row_rf_24h['d9']
                    ];

$sql_rh = "select * from rh_10day order by ABS(LAT-($lat)) , ABS(LON-($lon)) limit 1";
$result_rh = mysqli_query($con, $sql_rh);

    $row_rh = mysqli_fetch_assoc($result_rh);
        		
		$rh_array = [$row_rh['Day1'],
		$row_rh['Day2'],
		$row_rh['Day3'],
		$row_rh['Day4'],
		$row_rh['Day5'],
		$row_rh['Day6'],
		$row_rh['Day7'],
		$row_rh['Day8'],
		$row_rh['Day9']
                    ];

$sql_wind = "select * from wind_10day order by ABS(LAT-($lat)) , ABS(LON-($lon)) limit 1";
$result_wind = mysqli_query($con, $sql_wind);

    $row_wind = mysqli_fetch_assoc($result_wind);
        		
		$wind_array = [$row_wind['Day1'],
		$row_wind['Day2'],
		$row_wind['Day3'],
		$row_wind['Day4'],
		$row_wind['Day5'],
		$row_wind['Day6'],
		$row_wind['Day7'],
		$row_wind['Day8'],
		$row_wind['Day9']
                    ];
					
mysqli_close($con); 
 
 ?>
 
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>WEATHER APP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="plugins/custombox/dist/custombox.min.css" rel="stylesheet">
        <link href="plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        <style>
            .btn{
                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            }
            .card-box{
                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            }
        </style>
    </head>
    <body class="paneD scroller" style="background-image: url('images/unnamed.jpg')">

<!--         Navigation Bar
        <header id="topnav">
            <div class="topbar-main" style="background-image: url('images/unnamed.jpg');border-bottom: white outset 1px">
                <div class="container-fluid">
                     Logo container
                    <div class="logo" >
                         Text Logo 
                        <a href="index.php" class="logo" >
                            <span class="logo-small" style="color: white;font-size: 17px;text-align: center !important;">DEPARTMENT OF METEOROLOGY</span>
                            <span class="logo-large" style="color: white;font-size: 17px;text-align: center !important;">DEPARTMENT OF METEOROLOGY</span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>  end container 
            </div>
             end topbar-main 
        </header>
         End Navigation Bar-->
        
        
        <div class="wrapper" style="margin-top: -16% !important;">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0"></ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row" style="margin-top: -2% !important;">
                    <div class="col-lg-6 col-xl-3">
                        <div class="card-box bg-info" style="background-color:#00569E !important;">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <img src="png/2.png" alt=""/>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="m-t-0 text-white" style="text-align: center"><b>Rainfall</b></h5>
                                        </div>
                                    </div><!-- End row -->
                                </div>
                                <div class="col-md-5" style="margin-top: 5%">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            
                                        </div>
                                        <div class="col-6 text-center">
                                            <h6 class="text-white m-t-0"></h6>
                                            <h4 class="text-white">
											<?php echo  $rf_24h_array[$day]; ?>
											 mm</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-xl-3">
                        <div class="card-box bg-info" style="background-color:#00569E !important;">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <img src="png/31.png" alt=""/>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="m-t-0 text-white" style="text-align: center"><b>Temperature</b></h5>
                                        </div>
                                    </div><!-- End row -->
                                </div>
                                <div class="col-md-5" style="margin-top: 5%">
                                   <div class="row">
                                        <div class="col-6 text-center">
                                            <h6 class="text-white m-t-0">Minimum</h6>
                                            <h4 class="text-white">
											<?php echo  $min_temp_array[$day]; ?>
											<i class="wi wi-degrees"></i>C</h4>
                                        </div>
                                        <div class="col-6 text-center">
                                            <h6 class="text-white m-t-0">Maximum</h6>
                                            <h4 class="text-white">
											<?php echo  $max_temp_array[$day]; ?>
											<i class="wi wi-degrees"></i>C</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3">
                        <div class="card-box bg-info" style="background-color:#00569E !important;">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <img src="png/26.png" alt=""/>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="m-t-0 text-white" style="text-align: center"><b>Wind</b></h5>
                                        </div>
                                    </div><!-- End row -->
                                </div>
                                <div class="col-md-5" style="margin-top: 5%">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <h6 class="text-white m-t-0">Direction</h6>
                                            <h4 class="text-white">
											<?php 
											
											$wind_split = str_split($wind_array[$day],3);
											$wind_direction = $wind_split[0];
											$wind_speed = $wind_split[1];
											
											echo $wind_direction; 
											?>
											<i class="wi wi-degrees"></i></h4>
                                        </div>
                                        <div class="col-6 text-center">
                                            <h6 class="text-white m-t-0">Speed</h6>
                                            <h4 class="text-white">
											<?php echo  $wind_speed; ?>
											km/h
											</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3">
                        <div class="card-box bg-info" style="background-color:#00569E !important;">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <img src="png/27.png" alt=""/>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="m-t-0 text-white" style="text-align: center"><b>Humidity</b></h5>
                                        </div>
                                    </div><!-- End row -->
                                </div>
                                  <div class="col-md-5" style="margin-top: 5%">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            
                                        </div>
                                        <div class="col-6 text-center">
                                            <h6 class="text-white m-t-0"></h6>
                                            <h4 class="text-white">
											<?php echo  $rh_array[$day]; ?>
											%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                
                           <!-- Basic Form Wizard -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box bg-info" style="background-color:#00569E !important;">
                            <a href="englishLanguage.php"><button type="button" class="btn btn-block btn--md btn-danger waves-effect waves-light"><i class="fa fa-backward"></i>&nbsp;&nbsp;&nbsp;&nbsp;MOVE TO HOME</button></a>
                        </div>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Moment  -->
        <script src="plugins/moment/moment.js"></script>

        <!-- Counter Up  -->
        <script src="plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Sparkline -->
        <script src="plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- skycons -->
        <script src="plugins/skyicons/skycons.min.js" type="text/javascript"></script>

        <!-- Circliful -->
        <script src="plugins/jquery-circliful/js/jquery.circliful.min.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/pages/jquery.widgets.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#fff"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };
        </script>

    </body>
</html>