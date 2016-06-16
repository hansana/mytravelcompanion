<?php

include '../Controllers/user_checkLogin.php';

if(session_id() == ''){
    session_start();
}

if (isset($_REQUEST['city1Lng']) && 
        isset($_REQUEST['city1Lat']) && 
        isset($_REQUEST['city2Lng']) && 
        isset($_REQUEST['city2Lat']) && 
        isset($_REQUEST['city1']) && 
        isset($_REQUEST['city2']) && 
        isset($_REQUEST['from']) && 
        isset($_REQUEST['to']) && 
        isset($_REQUEST['id_repeat']) && 
        isset($_REQUEST['start_time']) && 
        isset($_REQUEST['ridekind']) 
    ){
    
    
    $city1Lat = $_REQUEST['city1Lat'];   
    $city1Lng = $_REQUEST['city1Lng'];
    $city2Lat = $_REQUEST['city2Lat'];   
    $city2Lng = $_REQUEST['city2Lng'];
    $city1 = $_REQUEST['city1'];
    $city2 = $_REQUEST['city2'];
    $from = $_REQUEST['from'];
    $to = $_REQUEST['to'];
    $id_repeat = $_REQUEST['id_repeat'];
    $start_time = $_REQUEST['start_time'];
    $ridekind = $_REQUEST['ridekind'];
    
    
    $mapcenterLat = ($city1Lat+$city2Lat)/2;
    $mapcenterLng = ($city1Lng+$city2Lng)/2;

}
else{
    echo "Form submission failed!";
}
//
//    $city1Lat = 6.864908099999999;   
//    $city1Lng = 79.89967890000003;
//    $city2Lat = 6.788070599999998;   
//    $city2Lng = 79.89128129999995;  
//    
//    $mapcenterLat = ($city1Lat+$city2Lat)/2;
//    $mapcenterLng = ($city1Lng+$city2Lng)/2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Travel Companion - Register your ride</title>

    <!-- Bootstrap Core CSS -->
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../Bootstrap/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <!--<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>-->

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    
    
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>

        function mapLocation() {
            var directionsDisplay;
            var directionsService = new google.maps.DirectionsService();
            var map;

            function initialize() {
                directionsDisplay = new google.maps.DirectionsRenderer();
                var myCenter = new google.maps.LatLng(<?php echo $mapcenterLat ?>,<?php echo $mapcenterLng ?>);
                var mapOptions = {
                    zoom: 12,
                    center: myCenter
                };
//                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
                directionsDisplay.setMap(map);
//                google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
//                google.maps.event.addDomListener(window, 'load', calcRoute);
                calcRoute();
            }

            function calcRoute() {
                var start = new google.maps.LatLng(<?php echo $city1Lat ?>,<?php echo $city1Lng ?>);
                //var end = new google.maps.LatLng(38.334818, -181.884886);
                var end = new google.maps.LatLng(<?php echo $city2Lat ?>,<?php echo $city2Lng ?>);
                var bounds = new google.maps.LatLngBounds();
                bounds.extend(start);
                bounds.extend(end);
                map.fitBounds(bounds);
                var request = {
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING
                };
                directionsService.route(request, function (response, status) {
                    if (status === google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                        directionsDisplay.setMap(map);
                    } else {
                        alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
                    }
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        }
        mapLocation();

</script>

</head>

<body>

    <!--header-->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">My Travel Companion</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['username'])){ ?>
                    <li>
                        <a href="userHome.php">Carpool</a>
                    </li>                     
                    <?php }else{  ?>
                    <li>
                        <a href="index.html">Home</a>
                    </li> 
                    <?php } ?>
                    <li>
                        <a href="about.php">How this works</a>
                    </li>
                    <li>
                        <a href="contactUs.php">Contact us</a>
                    </li>
                    <?php if (isset($_SESSION['username'])){ ?>
                    <li>
                        <a href="userProfile.php">My Profile</a>
                    </li>                     
                    <?php }
                    if (isset($_SESSION['username'])){ ?>  
                    <li>
                        <a href="../Controllers/logout.php">Logout</a>
                    </li>                    
                    <?php }else{  ?>                    
                    <li>
                        <a href="login.php">login</a>
                    </li>
                    <?php } ?> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../Bootstrap/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Register Your Ride</h1>
<!--                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!--main content-->

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
 
                 <div id="googleMap" style="width:800px;height:500px;"></div>
                 
     <div id="generalTabContent" class="tab-content">
        <div id="tab-edit" class="tab-pane fade in active">
            <form  id='register' action='../controllers/ride_register.php' method='post' class="form-horizontal">

                <h3>Register your Travel</h3>

                <div class="form-group"><label class="col-sm-3 control-label">Give some Description about your ride</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><textarea name="description" id="description" rows="3" class="form-control"></textarea></div>
                            <input type="hidden" id="from" name="from" value="<?php echo $from;?>"/>
                            <input type="hidden" id="city1Lat" name="city1Lat" value="<?php echo $city1Lat;?>"/>
                            <input type="hidden" id="city1Lng" name="city1Lng" value="<?php echo $city1Lng;?>"/>  
                            <input type="hidden" id="to" name="to" value="<?php echo $to;?>"/>
                            <input type="hidden" id="city1" name="city1" value="<?php echo $city1;?>"/>
                            <input type="hidden" id="city2" name="city2" value="<?php echo $city2;?>"/>                            
                            <input type="hidden" id="city2Lat" name="city2Lat" value="<?php echo $city2Lat;?>"/>
                            <input type="hidden" id="city2Lng" name="city2Lng" value="<?php echo $city2Lng;?>"/>  
                            <input type="hidden" id="start_time" name="start_time" value="<?php echo $start_time;?>"/>
                            <input type="hidden" id="ridekind" name="ridekind" value="<?php echo $ridekind;?>"/>
                            <input type="hidden" id="id_repeat" name="id_repeat" value="<?php echo $id_repeat;?>"/>                              
                        </div>
                    </div>
                </div>                     

                <hr/>
                <button type="submit" class="btn btn-blue btn-block">Proceed</button>

            </form>
        </div>
    </div>                     
                 
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; HI Solutions 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../Bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../Bootstrap/js/clean-blog.min.js"></script>
    
</body>
</html>