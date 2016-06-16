<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Travel Companion-Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../Bootstrap/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>    
    
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
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.php">How This Works</a>
                    </li>
                    <li>
                        <a href="contactUs.php">Contact us</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
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
                        <h1>Register Here</h1>
<!--                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>-->
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
            <form  id='register' action='../events/AddTeacher.php' method='post' class="form-horizontal">

                <h3>User Register</h3>

                <div class="form-group"><label class="col-sm-3 control-label">First Name</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><input name="first_name" id="first_name" type="text"  class="form-control"/></div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group"><label class="col-sm-3 control-label">Last Name</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><input name="last_name" id="last_name" type="text"  class="form-control"/></div>
                        </div>
                    </div>
                </div>                
                
                <div class="form-group"><label class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9">
                                <div >
                                    <label ><input name="gender" type="radio" value="0" checked="checked"/>
                                        Male
                                    </label>
                                    <label ><input name="gender" type="radio" value="1" />
                                        Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--                <div class="form-group"><label class="col-sm-3 control-label">Nearby Town</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><textarea name="address" id="address" rows="3" class="form-control"></textarea></div>
                        </div>
                    </div>
                </div>-->
   
                <div class="form-group"><label class="col-sm-3 control-label">Nearby Town</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><input name="address" id ="searchTextField1" type="text" placeholder="pick a sutable suggestion from list" class="form-control"/></div>
                            <input type="hidden" id="city1" name="city" />
                            <input type="hidden" id="city1Lat" name="cityLat" />
                            <input type="hidden" id="city1Lng" name="cityLng" />  
                        </div>
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-3 control-label">NIC No</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><input name="nic" id ="nic" type="text"  class="form-control"/></div>
                        </div>
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><input name="email" id="email" type="email" class="form-control"/></div>
                        </div>
                    </div>
                </div>               
                
                <div class="form-group"><label class="col-sm-3 control-label">Contact Numbers</label>

                    <div class="col-sm-9 controls">
                        <div class="row">
                            <div class="col-xs-9"><input name="mobile" id="mobile" type="text" placeholder="Mobile" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>
                <button type="submit" class="btn btn-blue btn-block">Finish</button>

            </form>
        </div>
    </div>                
                
                
            </div>
        </div>
    </div>


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
