<?php
include '../Controllers/user_checkLogin.php';

if(session_id() == ''){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Travel Companion - Register Your Ride</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
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
                        <h1>Register your Ride</h1>
<!--                        <hr class="small">
                        <span class="subheading">Register your Ride</span>-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
 
     <div id="generalTabContent" class="tab-content">
        <div id="tab-edit" class="tab-pane fade in active">
            <form  id='register' action='markRideMap.php' method='post' class="form-horizontal">

                <h3>Register your Ride</h3>

                <div class="form-group"><label class="col-sm-3 control-label">Ride Start from</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><input name="from" id="searchTextField1" type="text" autocomplete="on" runat="server" class="form-control"/></div>
                            <!--<input id="searchTextField" type="text" size="50">-->
                            <input type="hidden" id="city1" name="city1" />
                            <input type="hidden" id="city1Lat" name="city1Lat" />
                            <input type="hidden" id="city1Lng" name="city1Lng" />  
                        </div>
                    </div>
                </div>
                
                <div class="form-group"><label class="col-sm-3 control-label">To</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><input name="to" id="searchTextField2" type="text" autocomplete="on" runat="server" class="form-control"/></div>
                            <input type="hidden" id="city2" name="city2" />
                            <input type="hidden" id="city2Lat" name="city2Lat" />
                            <input type="hidden" id="city2Lng" name="city2Lng" /> 
                        </div>
                    </div>
                </div>                        

              <div class='form-group'>
                <label for="repeat">Repeat</label>
                <select class='form-control' id="id_repeat" name="id_repeat">
                  <option value="0">No repeats</option>
                  <option value="1">Monday to Friday</option>
                  <option value="2">Monday to Saturday</option>
                  <option value="3">Seven days a week</option>
                </select>
              </div>
                
              <div class='form-group' id='datetimepicker'>
	             <label for="start_time" class='control-label'>Departure time</label>
	             <input type='text' name='start_time'  
	                 id="start_time" class='form-control' placeholder = 'immidiately'>
	             <span class='hidden help-block'></span>
              </div>                
                
                <div class="form-group"><label class="col-sm-3 control-label"></label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9">
                                <div >
                                    <label ><input name="ridekind" type="radio" value="0" checked="checked"/>
                                        Ask for ride
                                    </label>
                                    <label ><input name="ridekind" type="radio" value="1"/>
                                        Offer a ride</label>
                                </div>
                            </div>
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
    -->

    <hr>

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
    
    <script src="../Bootstrap/js/new-ride.js"></script>
    


</body>

</html>
